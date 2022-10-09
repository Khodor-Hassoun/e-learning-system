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
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->string('password');
            $collection->string('user_type');
            $collection->string('profile_picture');
            $collection->timestamps();
        });
        Schema::create('courses', function($collection){
            $collection->string('name');
            $collection->json('instructors');
            $collection->json('students');
            $collection->json('assignments');
        });
        Schema::create('announcements', function($collection){
            $collection->string('name');
            $collection->string('instructor');
            $collection->string('course');
            $collection->string('message');
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
