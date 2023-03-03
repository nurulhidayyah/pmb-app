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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nik', 20);
            $table->string('alamat');
            $table->string('jk', 20);
            $table->string('religion', 20);
            $table->string('tp_lahir');
            $table->string('tg_lahir');
            $table->string('no_hp', 15);
            $table->string('th_lulus', 10);
            $table->boolean('is_active')->default(true);
            $table->integer('role_id')->default(2);
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
