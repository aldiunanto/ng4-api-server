<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class Employee extends Controller {

    public function index(){
		$fetch = Employees::all();
    	return response()->json($fetch)->header('Access-Control-Allow-Origin', '*');
    }
    public function show($em_id){
    	$row = Employees::find($em_id);
    	return response()->json($row)->header('Access-Control-Allow-Origin', '*');
    }
    public function store(Request $req){
    	$param = json_decode($req->input('params'));
    	Employees::create([
    		'em_nik'	=> $param->em_nik,
    		'em_name'	=> $param->em_name,
    		'em_div'	=> $param->em_div
    	]);

    	return response()->json(['created' => true])->header('Access-Control-Allow-Origin', '*');
    }
    public function isDuplicate($em_nik){
    	$count = Employees::where('em_nik', $em_nik)->count();
    	return response()->json(['count' => $count])->header('Access-Control-Allow-Origin', '*');
    }

}