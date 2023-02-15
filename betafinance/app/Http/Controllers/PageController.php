<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\LoanApplicants;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;


class PageController extends Controller
{
    public function home(){
 
        return view('/admin-login');
       
    }

    public function welcome(){
        return view('/admin-welcome');
    }

    public function loginAttempt(Request $request){

        $error = '';

        $user = Admin::where('name', $request->name)->first();
        // dd($user)


        if ($user->password === $request->password) {

            $total_applications =  LoanApplicants::count();
            $total_approved = LoanApplicants::where("denied","user-accepted")->count();
            $total_approved_amount = LoanApplicants::where("denied","user-accepted")->sum('editedamount');
            $user_declined = LoanApplicants::where("denied","user-denied")->count();
            $user_null = LoanApplicants::where("denied",null)->count();
            $total_disbursed = LoanApplicants::where("disbursed","true")->count();
            $total_disbursed_amount = LoanApplicants::where("disbursed","true")->sum('editedamount');
            $total_declined = $user_declined + $user_null;
            // dd($total_applications);
            return view('admin-welcome')->with(compact('total_applications', 'total_approved', 'total_declined', 'total_approved_amount', 'total_disbursed', 'total_disbursed_amount')); 
        } else {
             $error = 'Credentials dooes not match';
            return view("admin-login",compact('error'));
        }
    }

    public function approve_table(){
        $total_list = LoanApplicants::get();
        
        // dd($total_list);
        // var_dump(response()->json($total_list));

        // foreach ($total_list as $list){
        //     dd(response()->json($list));
        // }

        // return response()->json([
        //     'students' => $students
      
        // ]);
        return view('/approve-table',compact('total_list'));
       
    }

    public function disburse_table() {
        $total_list = LoanApplicants::where("denied", "user-accepted")->orWhere("disbursed", "")->orderBy('uid')->get();
        // dd($total_list);
        return view('/disburse-table',compact('total_list'));
    }

    public function confirm_disburse(Request $request){
       
        $reff = $request->custId;
        $checked = LoanApplicants::where('monnifyRef', $reff)->first();
        $checked->update(['disbursed' => 'true']);
        // dd($checked);
        // $total_list = LoanApplicants::where("denied", "user-accepted")->orWhere("disbursed", "")->orderBy('uid')->get();
        // return view('/disburse-table',compact('total_list'));

        return Redirect::to(url()->previous());
    }

    public function approve_table_search(Request $request) {

        $from = $request->from;
        $to = $request->to; 

        $date = Carbon::parse($from)->toDateTimeString(); // 2019/7/31
        $dat = Carbon::parse($to)->toDateTimeString();
        // $dateFrom = $date->startOfDay(); // 2019/7/31 00:00:00
        // $ch = Carbon::parse($from)->toDateString();
        // dd( $date);
        // dd($request->from, $request->to);    
        if($from != "" && $to != "")
			{

                // dd($request->from, $request->to);
                $total_list = LoanApplicants::whereBetween('created_at', [$date, $dat])->get();
				// $info = LoanApplicants::Where('created_at', '>=' ,Carbon::createFromFormat('d/m/Y', $request->from_date)->format('Y-m-d'))->Where('created_at', '<=' ,Carbon::createFromFormat('d/m/Y', $request->to_date)->format('Y-m-d'));

                // dd($total_list);
			}
        
            return view('/approve-table-search',compact('total_list'));
        // return view('/approve-table-search');
    }

    
    public function disburse_table_search(Request $request) {

        $from = $request->from;
        $to = $request->to; 

        $date = Carbon::parse($from)->toDateTimeString(); // 2019/7/31
        $dat = Carbon::parse($to)->toDateTimeString();
        // $dateFrom = $date->startOfDay(); // 2019/7/31 00:00:00
        // $ch = Carbon::parse($from)->toDateString();
        // dd( $date);
        // dd($request->from, $request->to);    
        if($from != "" && $to != "")
			{

                // dd($request->from, $request->to);
                $total_list = LoanApplicants::whereBetween('created_at', [$date, $dat])->get();
				// $info = LoanApplicants::Where('created_at', '>=' ,Carbon::createFromFormat('d/m/Y', $request->from_date)->format('Y-m-d'))->Where('created_at', '<=' ,Carbon::createFromFormat('d/m/Y', $request->to_date)->format('Y-m-d'));

                // dd($total_list);
			}
        
            return view('/disburse-table-search',compact('total_list'));
        // return view('/approve-table-search');
    }


    public function create_Admin(){
        return view('/admin-create-user');
    }

    public function createAdmin(Request $request){

        $data = [
            $name = $request->name,
            $password = $request->password,
            // $role = $request->role,
        ];

        Admin::create(array(
            'name' => $name,
            'password' => $password,
            // 'role' => '2'
            
        ));
        $checking = Admin::where("name", $request->name)->get();
        if ($checking != null){
            return redirect()
                    ->back()
                    // ->withInput()
                    ->with('error', 'There was a failure while sending the message!');
        }
        // return view('/admin-create-user');
    }
}
