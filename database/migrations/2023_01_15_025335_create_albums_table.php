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
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('photographer_id');
            $table->string('title');
            $table->text('description');
            $table->string('feature_img');
            $table->date('date');
            $table->boolean('featured');
            $table->boolean('default')->default(0);
            $table->softDeletes();
            $table->foreign('photographer_id')->references('id')->on('photographers');
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
        Schema::dropIfExists('albums');
    }
};
