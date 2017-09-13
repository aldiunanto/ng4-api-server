<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class Employee extends Controller {

    public function index($take = null){
		$fetch = (! is_null($take) ? Employees::take($take)->get() : Employees::all());
    	return response()->json($fetch)->header('Access-Control-Allow-Origin', '*');
    }
    public function show($em_id){
    	$row = Employees::find($em_id);
    	return response()->json($row)->header('Access-Control-Allow-Origin', '*');
    }
    public function store(Request $req){
    	Employees::create([
    		'em_nik'	=> $req->json('em_nik'),
    		'em_name'	=> $req->json('em_name'),
    		'em_div'	=> $req->json('em_div')
    	]);

    	return response()->json(['created' => true])->header('Access-Control-Allow-Origin', '*');
    }
    public function isDuplicate($em_nik){
    	$count = Employees::where('em_nik', $em_nik)->count();
    	return response()->json(['count' => $count])->header('Access-Control-Allow-Origin', '*');
    }
    public function save(Request $req){
    	$row = Employees::find($req->json('em_id'));

    	$row->em_name 	= $req->json('em_name');
    	$row->em_div	= $req->json('em_div');

    	$row->save();
    	return response()->json(['updated' => true])->header('Access-Control-Allow-Origin', '*');
    }
    public function destroy($em_id){
    	Employees::destroy($em_id);
    	return response()->json(['deleted' => true])->header('Access-Control-Allow-Origin', '*');
    }

}