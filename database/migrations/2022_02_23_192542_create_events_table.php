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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->date('date')->nullable();
            $table->text('image_path')->nullable();
            $table->text('content')->nullable();
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('domain_id');
            $table->foreign('domain_id')->references('id')->on('domains');
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
        Schema::dropIfExists('events');
    }
};
