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

}