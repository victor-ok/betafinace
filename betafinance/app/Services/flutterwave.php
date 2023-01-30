<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class flwave {
    private $pubkey;
    private $secretkey;
    private $enckey;

    public function __construct()
    {
        $this->pubkey = env(FLW_PUBLIC_TEST_KEY);
        $this->secretkey = env(FLW_SECRET_TEST_KEY);
        $this->enckey = env(FLW_ENCY_KEY);
    }


    public function pay_with_card (Request $req){
        $payload = [
            'card_number' => $req->query('card_number'),
            'cvv' => $req->query('card_cvv'),
            'expiry_month' => $req->query('card_expiry_month'),
            'expiry_year' => $req->query('card_expiry_year'),
            'currency' => 'NGN',
            'amount' => "1000",
            'email' => $req->query('email'),
            'fullname' => $req->query('card_name'),
            'tx_ref' => generateTransactionReference(),
            'redirect_url' => url('/pay/redirect'),
        ];

    }


}