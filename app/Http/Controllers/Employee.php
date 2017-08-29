<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class Employee extends Controller {

    public function index(){
    	$fetch = Employees::all();
    	return response()->json($fetch);
    }

}