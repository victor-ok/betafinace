<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use App\Models\LoanApplicants;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    private $name;
    public $email;
    public $token;

    // public function __construct(Request $request)
    // {
    //     $this->name = $request->Name;
    //     $this->email = $request->email;
        

    // }



    public function index()
    {
        return view('home');
    }




    public function payCard(Request $request){

        

        $data = [
            $name = $request->Name,
            $DOB = $request->dob,
            $id = $request->identity,
            $idnum = $request->identityv,
            $bvn = $request->BVN,
            $email = $request->email,
            $phone = $request->phone,
            $bank = $request->bank,
            $account = $request->account,
            $loanamount = $request->loanamount,

            $newId = $id."".$idnum,
            
        ];
        LoanApplicants::create(array(
            'name' => $name,
            'dob' => $DOB,
            'id' => $id,
            'idnum' => $idnum,
            'bvn' => $bvn,
            'email' => $email,
            'phone' => $phone,
            'bank' => $bank,
            'account' => $account,
            'loanamount' => $loanamount,
            

        ));
        
        // $this->name = $name;
        

        return view('applicationdetails')->with(compact('name', 'DOB', 'id', 'idnum', 'bvn', 'email', 'phone', 'bank', 'account', 'loanamount'));
    }




    public function loanApplicationPay($name, $email)
    {



        /* 
            LOGIN TO MONNIFY TO GET YOUR BEARER TOKEN

            INITALIZE TRANSACTION

            THEN GET TRANSACTION STATUS
        */
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $bytes = substr(str_shuffle($str_result), 0, 10);
        $ref = $bytes;
        
        $resx  = Http::withBasicAuth('MK_TEST_L400YM060T', '6Y0N89VEE2U9R1QLRU42E686H7Q8ZJHR'
        )->post('https://api.monnify.com/api/v1/auth/login', []);

       
        // var_dump($resx->getBody()->getContents());
        $json = json_decode($resx, true);
        $json['responseBody']['accessToken'];  
        $bearer = $json['responseBody']['accessToken'];

        
        if(!is_null($bearer)){

            

            $check = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' .$bearer,
            ])->post('https://sandbox.monnify.com/api/v1/merchant/transactions/init-transaction',[
                
                    "amount" => 1000.00,
                    "customerName" => $name,
                    "customerEmail" => $email,
                    "paymentReference" => $ref,
                    "paymentDescription"=>"Loan Application",
                    "currencyCode"=>"NGN",
                    "contractCode"=>"9096096054",
                    "redirectUrl"=> "http://127.0.0.1:8000/loan-app",
                    "paymentMethods"=>[]
            ]);

            // var_dump($check->getBody()->getContents());
            
            $json = json_decode($check, true);
            $json['responseBody']['transactionReference']; 
            $checkout = $check['responseBody']['checkoutUrl'];
            $transref = $json['responseBody']['transactionReference']; 
           
            $urltrans = urlencode($transref);

            // dd($name, $ref, $transref);

            

            if ($checkout){
                $uri = str_replace("|", "%", $transref);
                LoanApplicants::where('name', $name)->update([
                    'paymentRef' => $ref,
                    'monnifyRef' => $transref
                ]);

                return Redirect::to("https://sandbox.sdk.monnify.com/checkout/" .$urltrans);

                // dd($name, $ref, $transref);
                // LoanApplicants::where('name', $name)->update([
                //                         'paymentRef' => $ref,
                //                         'monnifyRef' => $transref
                //                     ]);

                // $pay = LoanApplicants::where('name', '=', $name)->first();
                // $pay->paymentRef = $ref;
                // $pay->monnifyRef = $transref;
                // $pay->save();
                // $id = LoanApplicants::where('name', $name)->get('id');
                // LoanApplicants::where('id', $id)
                //      ->update(['paid' => "paid"]);
               
                // $name = DB::table('LoanApplicants')->where('name', $name)->update("paid", "paid");

                // $student = LoanApplicants::find($name);
                // $student->paid = "paid";
                
                // $student->update();
                
                // $check_status = Http::withHeaders([
                //     'Content-Type' => 'application/json',
                //     'Authorization' => 'Bearer ' .$bearer,
                // ])->get('https://sandbox.sdk.monnify.com/api/v1/transactions' .$urltrans);


                // $check_action->getBody()->getContents();

                // if(){

                // }

            }

            

            
        }
        // $curl = curl_init();
 
        //          curl_setopt_array($curl, array(
        //          CURLOPT_URL => 'https://sandbox.monnify.com/api/v1/auth/login',
        //          CURLOPT_RETURNTRANSFER => true,
        //          CURLOPT_ENCODING => '',
        //          CURLOPT_MAXREDIRS => 10,
        //          CURLOPT_TIMEOUT => 0,
        //          CURLOPT_FOLLOWLOCATION => true,
        //          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //          CURLOPT_CUSTOMREQUEST => 'POST',
        //          CURLOPT_POSTFIELDS =>$dat,
        //          CURLOPT_HTTPHEADER => array(
        //              'Content-Type: application/json'
                     
        //          ),
        //          ));
 
        //          $response = curl_exec($curl);
        //          \Log::info('IBRIS Response: '.$response);
        //          curl_close($curl);
        //          $responseData = json_decode($response);
        //          print_r($responseData);
        // $response = Http::withBasicAuth('MK_TEST_L400YM060T', '6Y0N89VEE2U9R1QLRU42E686H7Q8ZJHR')->post('sandbox.monnify.com/api/v1/auth/login');

        
        // return view('loanapplication');
    }






    public function payment_details(){

        // $string = url()->full();

        // dd($string);

        $start  = Http::withBasicAuth('MK_TEST_L400YM060T', '6Y0N89VEE2U9R1QLRU42E686H7Q8ZJHR'
        )->post('https://api.monnify.com/api/v1/auth/login', []);



        $json = json_decode($start, true);
        $json['responseBody']['accessToken'];  
        $bearer = $json['responseBody']['accessToken'];
        // $checkout = $check['responseBody']['checkoutUrl'];
        // $transref1 = $json['responseBody']['transactionReference']; 
        // $currentURL = url()->full();
    
        // dd($currentURL);
        
        // $string = url()->full();
        // dd($string);
        // $pattern = '/[=]/';
        // $string = url()->full();
        // dd($string);
        // $uri =  preg_split( $pattern, $string );
        // dd($uri);
        // $urlRef = $uri[1];
        // // $array = explode(" ",$str); 

        // $newTrans = explode(" ",$urlRef);
        // // var_dump($newTrans);
        // $clean_url = str_replace("%", "|", $newTrans);
        // dd($clean_url);
        // $implode = implode(" ", $clean_url);
        // $urltran = urlencode($implode);
        // dd($urltran);


        // dd($urltrans);
        // $trans_status = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'Authorization' => 'Bearer ' .$bearer,
        // ])->get('https://sandbox.monnify.com/api/v2/transactions/' .$urltrans);
        
        if(!is_null($bearer)){
            $string = url()->full();
            // dd($string);
            $pattern = '/[=]/';
            $uri =  preg_split( $pattern, $string);
            $ref = $uri[0];
            $monRef = $uri[1];
            $length = strlen($monRef);
            // dd($monRef);
            // dd($length);

            if ($length == 10 ){
                $here = LoanApplicants::where('paymentRef', $monRef)->first();
                // dd($here);
                if ($here){
                    $gotten = $here->first('monnifyRef');
                    $REF = $gotten;
                } else {
                    $REF = '';
                }
            }

            if ($length == 35){
                $clean_ref = str_replace("%7C", "|", $monRef);
                // dd($clean_ref);
                $there = LoanApplicants::where('monnifyRef', $clean_ref)->first();
                    // dd($there);

                    if($there){
                            $got = $there->first('monnifyRef');
                            $REF = $got;
                            // $there->monnifyRef?$there->monnifyRef:'';
                                // dd($REF);
                            }else {
                                $REF = '';
                            }
                    // $REF = $got;
                    // dd($REF);
            }




//             $word = "fox";
// $mystring = "The quick brown fox jumps over the lazy dog";
 
// Test if string contains the word 
// if(strpos($mystring, $word) !== false){
//     echo "Word Found!";
// } else{
//     echo "Word Not Found!";
// }
            // $success = 'paymentReference';
            // $failure = 'paymentReference';


            // if(str_contains($ref, $failure)){
            //     // dd($monRef);
            //     $clean_ref = str_replace("%", "|", $monRef);
            //     $cleanR = addslashes($clean_ref);
            //     // dd($cleanR);
            //     // 'name', 'LIKE', '%'.$search.'%'
            //     $escaped_str = str_replace("'", "''", $clean_ref);
            //     $here = LoanApplicants::where('monnifyRef','LIKE', '%'.$escaped_str.'%')->get();
            //     dd($here);
            //     // $here->monnifyRef ? $here->monnifyRef:'';
            //     // dd($here);

            //     if($here->count() > 0){
            //         $REF = $here->monnifyRef?$here->monnifyRef:'';
            //             dd($REF);
            //         }else {
            //             $REF = '';
            //         }
                // dd($REF);
            //     $clean_ref = str_replace("%", "|", $monRef);
            //     // dd($clean_ref);
            //     $here = LoanApplicants::where('monnifyRef',$clean_ref)->first();
            // dd($here);
            //     $REF = $here->monnifyRef;
            //     dd($REF);
            // }
            // if (str_contains($string, $failure)) {
            //     dd("The string 'lazy' was not found in the string\n");
            // }
            // if(str_contains($ref, $success)){
                // $clean_ref = str_replace("%7C", "|", $monRef);
                // dd($clean_ref);
            
            //     $here = LoanApplicants::where('paymentRef',$clean_ref)->first();
            // // dd($here);
            //     if($here){
            //     $here->monnifyRef?$here->monnifyRef:'';
            //         // dd($REF);
            //     }else {
            //         $REF = '';
            //     }
            // } 

            // if(str_contains($ref, $failure)){
            //     $cleanref = str_replace("%7C", "|", $monRef);
            //     // dd($cleanref);
            //     $here = LoanApplicants::where('monnifyRef','LIKE', $clean_ref)->first();
            // // dd($here);
            //     // if($here){
            //     // $here->monnifyRef?$here->monnifyRef:'';
            //     //     // dd($REF);
            //     // }else {
            //     //     $REF = '';
            //     // }
            // } 
            
            
            
            // if(strpos($ref, $failure) !==false) {
                
            // }
            // $clean_ref = str_replace("%", "|", $monRef);
        // dd($clean_ref);

        // $noString = preg_replace('/"/i', '', $clean_ref);
        // $noString = str_replace(' ', '', $clean_ref);
        // echo $noString;
        // $implode = implo(" ", $clean_ref);
        // dd(gettype($implode));
        // $urltran = urlencode($implode);
        // dd($implode);
// 
        // $var = "'$clean_ref'";
        // echo $var;
// $name = 'victor okafor';
// $users = LoanApplicants::where('name', $name)->get();

// ser::selectRaw('YEAR(birth_date) as year, COUNT(id) as amount')
// $users = LoanApplicants::
//              where('monnifyRef', $noString)
//              ->get();
            //  dd($users);
            // $REF = $here->monnifyRef?$here->monnifyRef : NULL;







            
            if ($REF){
            $checking = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' .$bearer,
            ])->get('https://sandbox.monnify.com/api/v2/transactions/'.$REF['monnifyRef']);
        

        $json = json_decode($checking, true);
        // dd($REF['monnifyRef']);
        // dd($json);

        $json['responseBody']['paymentStatus'];  
        $payStatus = $json['responseBody']['paymentStatus'];

        // dd($payStatus);

        if($payStatus === "PAID"){
            $pay_status = LoanApplicants::where('monnifyRef', '=', $REF['monnifyRef'])->first();
            $pay_status->update(['paid' => $payStatus]);
            
            $REF = "";
            // $pay_status->save();
            echo "<script>
                    setTimeout(function(){ window.location.href = '/'; }, 5000);
                </script>";
        return view('loanapproved');
        } elseif ($payStatus === "PENDING"){
             $pay_status = LoanApplicants::where('monnifyRef', '=', $REF['monnifyRef'])->first();
             $pay_status->update(['paid' => $payStatus]);
            // $pay_status->save();
            $REF = "";
            echo "<script>
                    setTimeout(function(){ window.location.href = '/'; }, 3000);
                </script>";
            return view('loandeclined');
        }
        // ["paymentStatus"]=> string(4) "PAID"
        }
        }
    }
}
