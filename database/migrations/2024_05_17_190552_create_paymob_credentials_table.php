<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymobCredentialsTable extends Migration
{
    public function up()
    {
        Schema::create('paymob_credentials', function (Blueprint $table) {
            $table->id();
            $table->string('api_key');
            $table->string('integration_id');
            $table->string('iframe_id');
            $table->string('hmac_secret');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paymob_credentials');
    }
}
