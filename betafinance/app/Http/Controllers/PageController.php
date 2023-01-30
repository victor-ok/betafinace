<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class PageController extends Controller
{
    public function home(){
 
        return view('/admin-login');
       
    }

    public function loginAttempt(Request $request){

        $error = '';

        $user = Admin::where('name', $request->name)->first();


        if ($user->password === $request->password && $user->role === '1') {

            return view('admin-welcome'); 
        } else {
             $error = 'Credentials dooes not match';
            return view("admin-login",compact('error'));
        }
    }

    public function table(){
 
        return view('/table');
       
    }
}
