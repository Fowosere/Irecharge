<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// require("Flutterwave-Rave-PHP-SDK/library/CardPayment.php");
// use Flutterwave\EventHandlers\EventHandlers\EventHandlers\EventHandlers\EventHandlers\CardPayment;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //

        // $customer = customer::find($req ->customer_id);

        // $req->validate([
        //     'card_number' => 'required',
        //     'cvv' => 'required',
        //     'expiry_month' => 'required',
        //     'expiry_year' => 'required',
      
        //     'amount' => 'required',
      
        //     'customer_id' => 'required',
        // ]);

        // $payload = [
        //     'card_number' => $req->input('card_number','required'),
        //     'cvv' => $req->input('card_cvv'),
        //     'expiry_month' => $req->input('card_expiry_month'),
        //     'expiry_year' => $req->input('card_expiry_year'),
        //     'currency' => 'NGN',
        //     'amount' => $req->amount,
        //     'email' => $customer->email,
        //     'customer_id' => $req->customer_id,
        //     'fullname' => $customer->last_name.$customer->first_name,
        //     'tx_ref' => rand(),
        //     'redirect_url' => url('/pay/redirect'),
        // ];


        // $url = "https://api.flutterwave.com/v3/payments";
        // $headers = [
        //     'Content-Type: application/json',
        //     'Authorization: FLWSECK_TEST-8338aa2e8ebd7bbd4f07d5d13b8d7e35-X' //Secret key of your account 
        // ];

        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_POST, 1);
        // curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
        // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 200);
        // curl_setopt($curl, CURLOPT_TIMEOUT, 200);
        // $response_body = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);
        // $result = json_decode($response_body, true);
        // if ($err) {
        //     throw new \Exception($err);
        // }
            
        // if (isset($result['status']) && $result['status'] == 'success') {
        //     if ( isset($result['data']['link']) && $result['data']['link'] != ' ') {
        //         return Redirect::to($result['data']['link']);
        //     }
        // }

        // throw new \Exception('Your transaction could not processed.');
    



    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }





    public function callback(Request $request){
    	$response = $request->all();
    	if ($response['status'] == 'successful') {
    		$status = "SUCCESS";
         
    	}else{
    		$status = "FAIL";
    	}
        return payment::create($request->all());
    	//Store the transaction as per your requirement
    }




}
