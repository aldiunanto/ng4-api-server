<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class Employee extends Controller {

    public function index(){
    	/*$str = '{"em_nik":"1305007","em_name":"Kartika","em_div":"Marketing"}';
    	$turn = json_decode($str);

    	echo $turn->em_nik;*/

    	$fetch = Employees::all();
    	return response()->json($fetch)->header('Access-Control-Allow-Origin', '*');
    }
    public function show($em_id){
    	$row = Employees::find($em_id);
    	return response()->json($row)->header('Access-Control-Allow-Origin', '*');
    }
    public function store(Request $req){
    	foreach($req->all() as $key => $val){
    		$param = $key;
    	}

    	$turn = json_decode($param);

    	return response()->json($turn)->header('Access-Control-Allow-Origin', '*');
    }

}