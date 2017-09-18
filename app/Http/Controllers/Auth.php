<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login(Request $req){
        $get 	= User::login(trim($req->json('email')));
        $output	= ['failed' => true];

        if($get->count()){
        	$row = $get->first();
        	if(app('hash')->check(trim($req->json('password')), $row->password)){
        		$output = $row;
        	}
        }

        return response()->json($output)->header('Access-Control-Allow-Origin', '*');
    }
}