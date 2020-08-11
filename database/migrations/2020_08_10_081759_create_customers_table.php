<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers',function (Blueprint $table) {
            $table -> increments('id');
            $table -> timestamps();
            $table -> string("Name",50);
            $table -> string("Last_Name",50);
            $table -> string("Mail",50);
            $table -> string("Code",100);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
