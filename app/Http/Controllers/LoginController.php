<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function tologin()
    {

        return view('login');
    }
    public function login(Request $request)
    {

        $rules = [
            'password' => 'required',
            'email' => ['required','email']
        ];
        $messages = [
            "required" => "Input tidak boleh kosong",
            "email" => "Email tidak valid",

        ];

        $request->validate($rules, $messages);
        if ($request->password=="tes" && $request->email=="tes@gmail.com") {
            $response = redirect("/allproduct");
            return ($response);
        }
        else{
            $response = redirect("/")->with("error", "Email dan Password tidak sesuai")->with('type', 'primary');

            return ($response);
            // return redirect()->back()->with("error", "Email dan Password tidak sesuai")->with('type', 'primary');
        }





    }
}
