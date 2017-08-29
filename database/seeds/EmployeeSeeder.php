<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
	private $_table = 'employees';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($this->_table)->insert([
        	'em_nik'	=> '1305006',
        	'em_name'	=> 'Aldi Unanto',
        	'em_div'	=> 'Information Technology'
        ]);
    }
}
