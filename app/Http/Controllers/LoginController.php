<?php

namespace App\Http\Controllers;

use App\Models\User_master;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index_page()
    {
        return view('zameen_dekho');
    }

    // Function to show login form
    public function login_form()
    {
        return view('login_page_admin');
    }

    public function user_login()
    {
        return view('login_page_user');
    }

    public function authenticate_user(Request $request)
    {
        $find_user = User_master::where('role','=','user')->where('username','=',$request->username)->first();

        if($find_user)
        {
            $user_id = $find_user->id;
            // If the username matches
            
            if($find_user->password == md5($request->password))
            {
                // If the password matches then ....
                session(['user' => $user_id]);

                if(session()->has('user'))
                {
                    return redirect('/home');
                }
            }
        }
    }

    public function authenticate_admin(Request $request)
    {
        $admin_details = User_master::where('role','=','admin')->where('username','=',$request->username)->first();

        if(!is_null($admin_details) && ($admin_details->password == md5($request->password)))
        {
            // If the admin user is found and the password matches then....
            return redirect()->route('admin-dashboard');
        }
    }
}
