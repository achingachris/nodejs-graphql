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
        Schema::create('cargo', function (Blueprint $table) {
            $table->id();
            $table->string('cargo_weight');
            $table->string('cargo_size');
            $table->string('pickup_location');
            $table->string('pickup_date');
            $table->string('dropoff_location');
            $table->longText('special_instructions'); // optional
            $table->string('vessel_berth_number'); // optional
            $table->string('bill_of_landing'); // optional
            $table->string('container_number'); // optional
            $table->string('client_reference_number'); // optional
            $table->string('attachment')->nullable(); // optional
            $table->enum('status', ['pending approval', 'approved', 'rejected', 'allocated', 'loaded', 'in transit', 'delivered', 'withdrawn']);
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
        Schema::dropIfExists('cargo');
    }
};
