<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id')->start_from(1000);
            $table->string('A_Name');
            $table->Integer('A_AddressId');
            $table->string('A_Email')->uniqid();
            $table->string('A_Pass');
            $table->string('A_Phone')->uniqid();
            $table->string('A_Photo');
            $table->string('A_otp')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
