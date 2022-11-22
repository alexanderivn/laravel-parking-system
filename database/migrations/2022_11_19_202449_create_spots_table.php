<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->integer('space')->default(250);
            $table->integer('min_rate')->default(3000);
            $table->integer('rate')->default(3000);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spots');
    }
};
