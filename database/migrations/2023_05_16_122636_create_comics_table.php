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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 50);
            $table->text('description');
            $table->text('thumb', 255);
            $table->string('price', 10);
            $table->string('series', 10);
            $table->date('sale_date', 10);
            $table->string('type', 10);
            $table->string('artists')->nullable();
            $table->string('writers')->nullable();

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
        Schema::dropIfExists('comics');
    }
};
