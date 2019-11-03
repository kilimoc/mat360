<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('phone',10)->nullable();
            $table->string('email_address',20)->unique();
            $table->string('username',30)->unique();
            $table->string('p_image',100)->nullable();
            $table->longText('password');
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
        Schema::dropIfExists('system_admins');
    }
}
