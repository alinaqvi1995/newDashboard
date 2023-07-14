<?php

namespace App\Http\Controllers;

use App\Models\CreditReport;
use Illuminate\Http\Request;
use App\Traits\phpcURL;
use Exception;
use App\Traits\ValidationRules;

class AdminController extends Controller
{
    use phpcURL;
    use ValidationRules;
    public function create(Request $request)
    {
        return view('dashboard.adminpanel.pages.create.create');
    }
    public function credit_report(Request $request)
    {
        $valid = $this->validReport($request);
        try {
            
            // dd($valid);
            $report = CreditReport::create($request->all());
            $url = "equifax/credit-report";
            $req = '
            {
                "firstName": "'.$request->firstName.'",
                "lastName": "'.$request->lastName.'",
                "ssn": "'.$request->ssn.'",
                "dob": "'.$request->dob.'",
                "houseNumber": "'.$request->houseNumber.'",
                "quadrant": "'.$request->quadrant.'",
                "streetName": "'.$request->streetName.'",
                "streetType": "'.$request->streetType.'",
                "city": "'.$request->city.'",
                "state": "'.$request->state.'",
                "zip": "'.$request->zip.'",
                "phone": "'.$request->phone.'"
              }
            ';
            $auth = 'Authorization: Bearer '.auth()->user()->api_token;
            $res = $this->postCurl($url,$req,$auth);
            // dd($res);
            if (isset($res['messages'])) {
                // dd('ok');
                return back()->with('error', $res['messages'][0]);
                // return redirect()->back()->with('error', $response['messages'][0]);
            }
            $report->pdfReportId = $res['pdfReportId'];
            $report->save();
            $getUrl = 'equifax/pdf-credit-report/'.$res['pdfReportId'];
            $auth = auth()->user()->api_token;
            $response = $this->getCurl($getUrl,$auth);
            $pdfData = $response;
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="'.$res['pdfReportId'].'.pdf"',
            ];
            return response($pdfData, 200, $headers);
        } 
        catch(Exception $ex)
        {
            // dd('Error', $ex->getMessage());
            return back()->with('error', $ex->getMessage());
        }
    }
}
