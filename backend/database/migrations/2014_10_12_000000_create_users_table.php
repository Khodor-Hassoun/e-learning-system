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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        Schema::create('user_types', function($collection){
            $collection->string('type');
        });
        Schema::create('users', function ($collection) {
            // $collection->id();
            $collection->string('name');
            $collection->string('email')->unique();
            // $collection->timestamp('email_verified_at')->nullable();
            $collection->string('password');
            $collection->integer('user_type')->references('__id')->on('user_types');
            $collection->binary('profile_picture');

            // $collection->rememberToken();
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
