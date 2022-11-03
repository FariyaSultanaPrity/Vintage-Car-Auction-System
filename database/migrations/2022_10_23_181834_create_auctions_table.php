<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->bigIncrements('id')->start_from(6000);
            $table->Integer('S_Id');
            $table->Integer('Bid_Id')->nullable();
            $table->Integer('Customer_Id')->nullable();
            $table->Integer('Payment_Id')->nullable();
            $table->Integer('P_Id');          
            $table->double('Start_Amount');
            $table->double('Final_Amount')->nullable();
            $table->Integer('Win_Status')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
}
