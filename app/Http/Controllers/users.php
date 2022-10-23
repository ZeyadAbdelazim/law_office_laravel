<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    public function login()
    {
        //use get to view the page.
        return view("login");
    }

    public function loginRequest(Request $request)
    {
        $data=[
            //go to file app.models.user.php and write protected $table="nameTableInDatabase";
            //or the table name in database must be `users`.
            "name"=>$request->name,
            "password"=>$request->password
        ];

        if(Auth::attempt($data))
        //attempt() check credentials and if they are correct, the user will login.
        {
            return redirect("home");
        }
        else {
            return redirect("login");

        }
    }

    public function register()
    {
        return view("register");

    }
    public function registerRequest(Request $resquest)
    {
        DB::table("users")->insert([
            "name"=>$resquest->name,
            "email"=>$resquest->email,
            "password"=>bcrypt($resquest->password),
            "phone"=>$resquest->phone,
            "country"=>$resquest->country,
        ]);
        return redirect("login");
    }
    public function logout(){
        Auth::logout();
        return redirect("login");
    }
}
