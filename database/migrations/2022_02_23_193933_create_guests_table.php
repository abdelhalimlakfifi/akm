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
        Schema::create('guests', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('gender');
            $table->string('phone')->nullable();
            $table->string('cin')->unique()->nullable();
            $table->float('price');
            $table->date('birthday');
            $table->text('image_path')->nullable();
            $table->date('expiration_date');
            $table->boolean('isEngaged')->default(false);
            $table->boolean('is_subscriber')->default(false);
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
};
