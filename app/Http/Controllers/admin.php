<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function addAdmin()
    {
        return view("add");

    }
    public function addAdminRequest(Request $resquest)
    {
        DB::table("users")->insert([

            "name"=>$resquest->name,
            "email"=>$resquest->email,
            "password"=>bcrypt($resquest->password),
            "phone"=>$resquest->phone,
            "country"=>$resquest->country,
            "role"=>$resquest->role,

        ]);
        return redirect("logout");
    }
}
