<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable();
            $table->string('username', 100)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('address')->nullable();
            $table->string('country',100)->nullable();
            $table->string('zip',20)->nullable();
            $table->string('state',100)->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('instagram_id')->nullable();
            $table->integer('status')->default('1');
            $table->integer('delete')->default('0');
            $table->string('token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
