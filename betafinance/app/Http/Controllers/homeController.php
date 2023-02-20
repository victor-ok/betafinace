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
        // return view('home');
        return view('index');
    }

    public function start()
    {
        // return view('home');
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
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
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
                    "redirectUrl"=> env('APP_URL').":8000/loan-app",
                    "paymentMethods"=>[]
            ]);

            $json = json_decode($check, true);
            $json['responseBody']['transactionReference']; 
            $checkout = $check['responseBody']['checkoutUrl'];
            $transref = $json['responseBody']['transactionReference']; 
           
            $urltrans = urlencode($transref);


            

            if ($checkout){
                $uri = str_replace("|", "%", $transref);
                LoanApplicants::where('name', $name)->update([
                    'paymentRef' => $ref,
                    'monnifyRef' => $transref
                ]);

                return Redirect::to("https://sandbox.sdk.monnify.com/checkout/" .$urltrans);

            }

            

            
        }
        
    }

    public function payment_details(){


        $got = '';
        $gotten = '';

        $start  = Http::withBasicAuth('MK_TEST_L400YM060T', '6Y0N89VEE2U9R1QLRU42E686H7Q8ZJHR'
        )->post('https://api.monnify.com/api/v1/auth/login', []);



        $json = json_decode($start, true);
        $json['responseBody']['accessToken'];  
        $bearer = $json['responseBody']['accessToken'];

        
        if(!is_null($bearer)){
            $string = url()->full();
            // dd($string);
            $pattern = '/[=]/';
            $uri =  preg_split($pattern, $string);
            $ref = $uri[0];
            $monRef = $uri[1];
            // dd($monRef);
            $length = strlen($monRef);
            // dd($monRef);
            // dd($length);
            
            switch ($length) {
                case 10:
                    $sucREF = $monRef;
                    $here = LoanApplicants::where('paymentRef', $sucREF)->get('monnifyRef')->first();
                    // dd($here);
                    $gotten = $here->monnifyRef;
                    // dd($gotten);
                    // dd('na 10 o');




                    if ($gotten != null){
                

                        $checking = Http::withHeaders([
                            'Content-Type' => 'application/json',
                            'Authorization' => 'Bearer ' .$bearer,
                        ])->get('https://sandbox.monnify.com/api/v2/transactions/'.$gotten);

                        $json = json_decode($checking, true);
                        // dd($REF['monnifyRef']);
                        // dd($json);

                        $json['responseBody']['paymentStatus'];  
                        $payStatus = $json['responseBody']['paymentStatus'];

                        // dd($payStatus);
                        if($payStatus === "PAID"){
                            $status = $gotten;
                            $pay_status = LoanApplicants::where('monnifyRef', '=', $gotten)->first();
                            $pay_status->update(['paid' => $payStatus]);
                            // dd($pay_status);
                            
                            // $REF = "";
                
                            // $pay_status->save();
                            // echo "<script>
                            //         setTimeout(function(){ window.location.href = '/'; }, 5000);
                            //     </script>";pay
                            // dd('paying');
                        return view('loanapplication')->with(compact('status'));
                        }

                // dd('no');
            }
                    
                    
                
                case 35:
                    $failREF = $monRef;
                    $clean_ref = str_replace("%7C", "|", $failREF);
                    // dd($clean_ref);
                    $there = LoanApplicants::where('monnifyRef', $clean_ref)->get('monnifyRef')->first();
                    // dd($there);
                    $got = $there->monnifyRef;
                    // dd($got);
                    // dd('na 35 o');
                                   
                    if ($got != null) {
                        // dd('im here');
                        $checking = Http::withHeaders([
                            'Content-Type' => 'application/json',
                            'Authorization' => 'Bearer ' .$bearer,
                        ])->get('https://sandbox.monnify.com/api/v2/transactions/'.$got);
        
                        $json = json_decode($checking, true);
                        // dd($REF['monnifyRef']);
                        // dd($json);
        
                        $json['responseBody']['paymentStatus'];  
                        $paySta = $json['responseBody']['paymentStatus'];
        
                        // dd($paySta);
        
                        if($paySta === "PENDING"){
                            $sta = $got;
                            $pay_sta = LoanApplicants::where('monnifyRef', '=', $got)->first();
                            $pay_sta->update(['paid' => $paySta]);
                            // dd($pay_status);
                            
                            // $REF = "";
                
                            // $pay_status->save();
                            // echo "<script>
                            //         setTimeout(function(){ window.location.href = '/'; }, 5000);
                            //     </script>";
                            echo "<script>
                                    setTimeout(function(){ window.location.href = '/'; }, 5000);
                                </script>";
                            return view('loandeclined');
                        // return view('loanapplicationpending')->with(compact('sta'));
                    }
            }

            // if ($length === 10 ){
                
            //     $sucREF = $monRef;
            //     $here = LoanApplicants::where('paymentRef', $sucREF)->get('monnifyRef')->first();
            //     dd($here);
            //     $gotten = $here;
            //     // dd($gotten);
                
            // }

            // if ($length === 35){
            //     $failREF = $monRef;
            //     $clean_ref = str_replace("%7C", "|", $failREF);
            //     // dd($clean_ref);
            //     $there = LoanApplicants::where('monnifyRef', $clean_ref)->get('monnifyRef')->first();
            //         // dd($there);
            //         $got = $there;
            //         // var_dump($got);
            //         // dd($there->first('monnifyRef'));
            //         // $REF = $got;
            //         // dd($got);
            // }




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

            



                

            
            
                
            
            // $checking = Http::withHeaders([
            //     'Content-Type' => 'application/json',
            //     'Authorization' => 'Bearer ' .$bearer,
            // ])->get('https://sandbox.monnify.com/api/v2/transactions/'.$REF['monnifyRef']);
        

        // $json = json_decode($checking, true);
        // // dd($REF['monnifyRef']);
        // // dd($json);

        // $json['responseBody']['paymentStatus'];  
        // $payStatus = $json['responseBody']['paymentStatus'];

        // dd($payStatus);

        // if($payStatus === "PAID"){
        //     $status = $REF['monnifyRef'];
        //     $pay_status = LoanApplicants::where('monnifyRef', '=', $REF['monnifyRef'])->first();
        //     $pay_status->update(['paid' => $payStatus]);
            
        //     $REF = "";

        //     // $pay_status->save();
        //     // echo "<script>
        //     //         setTimeout(function(){ window.location.href = '/'; }, 5000);
        //     //     </script>";
        // return view('loanapplication')->with(compact('status'));

        // } elseif ($payStatus === "PENDING"){
        //     $sta = $REF['monnifyRef'];
        //     dd($sta);
        //      $pay_stat = LoanApplicants::where('monnifyRef', '=', $REF['monnifyRef'])->first();
        //      $pay_stat->update(['paid' => $payStatus]);
        //     // $pay_status->save();
        //     $REF = "";
        //     // echo "<script>
        //     //         setTimeout(function(){ window.location.href = '/'; }, 3000);
        //     //     </script>";
        //     return view('loanapplicationpending')->with(compact('sta'));
        //     // return view('loandeclined');

        // } elseif ($payStatus === "FAILED"){
        //     $status = $REF['monnifyRef'];
        //     $pay_status = LoanApplicants::where('monnifyRef', '=', $REF['monnifyRef'])->first();
        //      $pay_status->update(['paid' => $payStatus]);
        //     // $pay_status->save();

        //     $REF = "";
        //     // echo "<script>
        //     //         setTimeout(function(){ window.location.href = '/'; }, 3000);
        //     //     </script>";
        //     return view('loanapplication')->with(compact('status'));
        //     // return view('loandeclined');
        // }
        // ["paymentStatus"]=> string(4) "PAID"
        // }
    // }
        
    }
}

        
    }
    public function checking_status(){
        $stat  = Http::withBasicAuth('MK_TEST_L400YM060T', '6Y0N89VEE2U9R1QLRU42E686H7Q8ZJHR'
        )->post('https://api.monnify.com/api/v1/auth/login', []);


        $json = json_decode($stat, true);
        $json['responseBody']['accessToken'];  
        $bearer = $json['responseBody']['accessToken'];

        if(!is_null($bearer)){
            $str = url()->full();
            // dd($string);
            $pattern = '/[=]/';
            $ur =  preg_split($pattern, $str);
            $ref = $ur[0];
            $monRef = $ur[1];
            // dd($monRef);
            // $length = strlen($monRef);

            $clean_ur = str_replace("%7C", "|", $monRef);
            // dd($clean_ur);

            $checked = LoanApplicants::where('monnifyRef', $clean_ur)->first();
            // dd($checked);
            $reff = $checked;
            // dd($reff);

            if ($reff){
                $checking = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' .$bearer,
                ])->get('https://sandbox.monnify.com/api/v2/transactions/'.$reff['monnifyRef']);

                $json = json_decode($checking, true);
                // dd($REF['monnifyRef']);
                // dd($json);

                $json['responseBody']['paymentStatus'];  
                $payStatus = $json['responseBody']['paymentStatus'];

                if($payStatus === "PAID"){
                    echo "<script>
                            setTimeout(function(){ window.location.href = '/'; }, 5000);
                        </script>";
                return view('loanapproved');

                } elseif ($payStatus === "PENDING"){
                    echo "<script>
                            setTimeout(function(){ window.location.href = '/'; }, 5000);
                        </script>";
                return view('loandeclined');
                } elseif ($payStatus === "FAILED"){
                    echo "<script>
                            setTimeout(function(){ window.location.href = '/'; }, 5000);
                        </script>";
                return view('loandeclined');
                }
            }
        }
    }

    public function decline_loan(){
        $str = url()->full();
        $pattern = '/[=]/';
        $ur =  preg_split($pattern, $str);
        $ref = $ur[0];
        $monRef = $ur[1];
        // dd($monRef);

        $clean_ur = str_replace("%7C", "|", $monRef);
            // dd($clean_ur);
            // $accept = LoanApplicants::where('paymentRef', $monRef)->get('monnifyRef')->first();
        $checked = LoanApplicants::where('monnifyRef', $clean_ur)->first();
        // dd($checked);
        $checked->update(['denied' => 'user-denied']);
        echo "<script>
                setTimeout(function(){ window.location.href = '/'; }, 5000);
            </script>";
        return view('loandeclined');
    }

    public function accept_loan(){
        $str = url()->full();
        $pattern = '/[=]/';
        $ur =  preg_split($pattern, $str);
        $ref = $ur[0];
        $monRef = $ur[1];
        // dd($monRef);

        $clean_ur = str_replace("%7C", "|", $monRef);
            // dd($clean_ur);
        $accept = LoanApplicants::where('paymentRef', $monRef)->get('monnifyRef')->first();
        $checked = LoanApplicants::where('monnifyRef', $clean_ur)->first();
        // dd($checked);
        $checked->update(['denied' => 'user-accepted']);
        echo "<script>
                setTimeout(function(){ window.location.href = '/'; }, 5000);
            </script>";
        return view('loanapproved');
    }

    public function accept_loan_edit(Request $request){
        $edited_loan_amount = $request->amount;
        $reff = $request->custId;
        // dd($edited_loan_amount);
        // dd($reff);

        // $str = url()->full();
        // $pattern = '/[=]/';
        // $ur =  preg_split($pattern, $str);
        // $ref = $ur[0];
        // $monRef = $ur[1];
        // $clean_ur = str_replace("%7C", "|", $monRef);

        // $accept = LoanApplicants::where('paymentRef', $monRef)->get('monnifyRef')->first();
        // dd($accept);
        $checked = LoanApplicants::where('monnifyRef', $reff)->first();
        $checked->update(['editedamount' => $edited_loan_amount]);
        $checked->update(['denied' => 'user-accepted']);
        // dd($checked);
        $reff = $checked['monnifyRef'];
        // dd($reff);


        

        return view('loanapprovededited')->with(compact('edited_loan_amount', "reff"));
    }

    public function decline_after_edit(Request $request) {
        // dd($request->all());
        $str = url()->full();
        $pattern = '/[=]/';
        $ur =  preg_split($pattern, $str);
        $ref = $ur[0];
        $monRef = $ur[1];
        $clean_u = str_replace("%7C", "|", $monRef);
        // dd($clean_u);

        $checked = LoanApplicants::where('monnifyRef', $clean_u)->first();
        // dd($checked);
        $checked->update(['denied' => 'user-denied']);
        echo "<script>
                setTimeout(function(){ window.location.href = '/'; }, 5000);
            </script>";
        return view('loandeclined');
    }

    public function accept_after_edit(Request $request) {
        // dd($request->all());
        $str = url()->full();
        $pattern = '/[=]/';
        $ur =  preg_split($pattern, $str);
        $ref = $ur[0];
        $monRef = $ur[1];
        $clean_u = str_replace("%7C", "|", $monRef);
        // dd($clean_u);

        $checked = LoanApplicants::where('monnifyRef', $clean_u)->first();
        $n = $checked['name'];
        $d = $checked['dob'];
        $id = $checked['id'];
        $idnum = $checked['idnum'];
        $bvn = $checked['bvn'];
        $email = $checked['email'];
        $phone = $checked['phone'];
        $bank = $checked['bank'];
        $account = $checked['account'];
        $loanamount = $checked['editedamount'];
        // dd($checked);

        return view('applicationdetailsconfirm')->with(compact('n', 'd', 'id', 'idnum', 'bvn', 'email', 'phone', 'bank', 'account', 'loanamount'));
    }

    public function confirm_after_edit($email) {
        $confirm = LoanApplicants::where('email', $email)->first();
        // dd($email);
        // dd($confirm);

        // IMPLEMENT UPDATING THE NEW DTABASE FIELD OF CONFIRM
        echo "<script>
                setTimeout(function(){ window.location.href = '/'; }, 5000);
            </script>";
        return view('loanapprovedfinal');
    }

}
