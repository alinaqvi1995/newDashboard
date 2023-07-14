<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait phpcURL
{
    public $baseurl = "https://api-sandbox.stitchcredit.com/api/";
    public function postCurl($url,$req,$auth = null)
    {
        // dd($auth);
        $url = $this->baseurl . $url;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>$req,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Accept: application/json',
            $auth
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }
    public function getCurl($url,$auth = null)
    {
        // dd($auth);
        $url = $this->baseurl . $url;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-sandbox.stitchcredit.com/api/'.$url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/pdf',
            'Authorization: Bearer '.$auth
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // $response = json_decode($response, true);
        return $response;
    }
}
