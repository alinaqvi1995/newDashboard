<?php

namespace App\Http\Controllers;

use App\Models\CreditReport;
use Illuminate\Http\Request;
use App\Traits\phpcURL;

class AdminController extends Controller
{
    use phpcURL;
    public function create(Request $request)
    {
        // dd($request->toArray());
        return view('dashboard.adminpanel.pages.create.create');
    }
    public function credit_report(Request $request)
    {
        // dd($request->toArray());
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
        $report->pdfReportId = $res['pdfReportId'];
        $report->save();
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-sandbox.stitchcredit.com/api/equifax/pdf-credit-report/'.$res['pdfReportId'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/pdf',
            'Authorization: Bearer '.auth()->user()->api_token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $pdfData = $response;
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="'.$res['pdfReportId'].'.pdf"',
        ];
        // $link = '<a href="https://api-sandbox.stitchcredit.com/api/equifax/pdf-credit-report/'.$res['pdfReportId'].'">view</a>';
        // dd($response);
        return response($pdfData, 200, $headers);
    }
}
