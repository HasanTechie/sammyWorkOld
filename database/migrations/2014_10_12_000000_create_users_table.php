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
            //`u_uid`, `u_organization_name`, `u_first_name`, `u_last_name`, `u_contact`, `u_country`, `u_state`, `u_city`, `u_is_company`, `u_email`, `u_password`, `u_bio`, `u_url_of_photo_image`, `u_url_of_nic_image`, `u_date_registered`, `u_hash`, `u_is_email_verified`, `u_is_active`
            $table->increments('id');
            $table->string('organization_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact');
            $table->string('state');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('bio');
            $table->string('photo');
            $table->string('identitydocument');
            $table->tinyInteger('is_company');
            $table->tinyInteger('is_email_verified');
            $table->tinyInteger('is_active');
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
