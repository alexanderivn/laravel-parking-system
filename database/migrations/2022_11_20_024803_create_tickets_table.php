<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')
                ->constrained('vehicles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('parking_code');
            $table->timestamp('clock_in');
            $table->timestamp('clock_out')->nullable();
            $table->integer('parking_fee')->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
