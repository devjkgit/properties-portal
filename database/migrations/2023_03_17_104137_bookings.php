<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("prop_id", 11);
            $table->date("start_date");
            $table->date("end_date");
            $table->string("cust_name", 255);
            $table->string("cust_email",255);
            $table->string("cust_phone",255);
            $table->string("persons",255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
