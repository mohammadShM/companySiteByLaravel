<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParallaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parallaxes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('titleSize');
            $table->string('titleColor');
            $table->text('body');
            $table->string('bodySize');
            $table->string('bodyColor');
            $table->string('image', 100);
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
        Schema::dropIfExists('parallaxes');
    }
}
