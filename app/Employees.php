<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model {

	protected	$table		= 'employees';
	protected	$primaryKey	= 'em_id';
	protected	$fillable	= ['em_nik', 'em_name', 'em_div'];
	public 		$timestamps = true;

}