<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('username', 255);
            $table->unsignedInteger('role_id')->index('users_role_id_foreign');
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('mobile_phone')->nullable();
            $table->unsignedTinyInteger('status')->default(0);
         
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
