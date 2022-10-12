<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MpesaController extends Controller
{
    //  a function that accesses mpesa token
    public function generateAccessToken(){ 
        $consumer_key = "bbqsprotGv1ipTpEbeOnOBrIA1ISobbs";
        $consumer_secret = "KhGus2AzOdsDs7V1";
        $credentials = base64_encode($consumer_key.":".$consumer_secret);
        $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
       
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic ".$credentials));
        curl_setopt($curl, CURLOPT_HEADER,false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);

        $access_token = json_decode($curl_response);

        return $access_token->access_token;
    
    }

    // initiating stk push
    public function STKpush(){
        $BusinessShortCode = 174379;
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $timestamp = Carbon::rawParse('now')->format('YmdHms');
        $password = base64_encode($BusinessShortCode.$passkey.$timestamp);
        $amount = 5;
        $PartyA = 254748148093;
        $PartyB = 174379;


        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
       
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$this->generateAccessToken()));
        
        
        $curl_post_data = [
            //Fill in the request parameters with valid values
            'BusinessShortCode' => $BusinessShortCode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $PartyA, // replace this with your phone number
            'PartyB' => $PartyB,
            'PhoneNumber' => $PartyA, // replace this with your phone number
            'CallBackURL' => 'https://8b3e-102-68-76-249.eu.ngrok.io/Humapp',
            'AccountReference' => "Esales",
            'TransactionDesc' => "Payment of X"
        ];
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        return $curl_response;
    }

}
