<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ResetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordManager extends Controller
{
    function forgetPassword(){
        return view("forget_password");
    }

    function forgetPasswordPost(Request $Request){
        $Request->validate([
            'email' => "required|email|exists:admins",
        ]);

        $token = Str::random(64);



        $pass = new ResetPassword();

        $pass->email = $Request->email;
        $pass->token = $token;

        $pass->save();

        Mail::send("emails.forget_password",['token' => $token],function ($message) use ($Request){

            $message->to($Request->email);
            $message->subject("Reset Password");
        });

        return back()->with('success', 'ایمیل بازیابی رمز عبور ارسال شد.');
    }

    function resetPassword($token){

        return view('new_password', compact('token'));
    }

    function resetPasswordPost(Request $request, ResetPassword $pass){

        $request->validate([
            "email"=>"required|email|exists:admins",
            "password"=>"required|string|min:6",

        ]);

        $updatePassword = DB::table('password_reset_tokens')->where([
            "email"=>$request->email,
            "token"=>$request->token
        ])->first();

        if(!$updatePassword){
            return redirect()->to(route('reset.password'))->with("error","invalid");
        }

        Admin::where("email",$request->email)->update(["password"=>Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(["email"=>$request->email])->delete();

        return redirect()->to(route("login"))->with("success","password reset success");

    }
}
