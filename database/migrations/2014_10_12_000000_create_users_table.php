<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // Full name
            $table->string('fatherjob'); //
            $table->string('image')->nullable();
            $table->string('phone')->unique(); // For mobile Phone
            $table->string('country')->default('Egypt'); // For mobile Phone
            $table->string('city'); // For City
            $table->integer('class_id')->nullable(); // To know class name
            $table->string('identity')->nullable(); // To know the ID Cart Number
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ip')->nullable();
            $table->enum('sex', ['male', 'female']);
            $table->enum('type', ['user', 'instructor', 'admin'])->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
