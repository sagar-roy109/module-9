<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(Request $request ){

        $id =  $request->route('id');
        $name = "Donal Trump";
        $age = "75";


        $data = array(
            "id" => $id,
            "name"=> $name,
            "age"=> $age
        )

        $cookie_name = "access_token";
        $value = "123-XYZ";
        $exp = 1;
        $path = "/";
        $doman = $_SERVER['SERVER_NAME'];

        return response("Hello {$id}");
    }
}
