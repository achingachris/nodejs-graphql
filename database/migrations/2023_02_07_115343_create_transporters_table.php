<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporters', function (Blueprint $table) {
            $table->increments('id');
            $table->String('company_name');
            $table->String('first_name');
            $table->String('last_name');
            $table->String('phone');
            $table->String('email');
            $table->String('company_reg_certificate');
            $table->String('company_tin_number');
            $table->integer('num_of_trucks');
            $table->char('bsns_specialization');
            $table->integer('relevant_docs');
            $table->integer('route');
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
        Schema::dropIfExists('transporters');
    }
};
