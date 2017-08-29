<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmployees extends Migration
{
    private $_table = 'employees';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->_table, function(Blueprint $tbl){
            $tbl->increments('em_id');
            $tbl->char('em_nik', 7)->unique();
            $tbl->string('em_name', 150);
            $tbl->string('em_div', 50);
            $tbl->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->_table);
    }
}
