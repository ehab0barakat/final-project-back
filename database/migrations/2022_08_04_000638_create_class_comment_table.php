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
        Schema::create('class_comment', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->string('user_name');
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("class_id");
            $table->foreign('user_id')->references('id')->on('normal_users')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
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
        Schema::dropIfExists('class_comment');
    }
};
