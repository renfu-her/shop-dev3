<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('姓名');
            $table->string('email')->nullable()->comment('電子郵件');
            $table->string('subject')->nullable()->comment('主題');
            $table->string('phone')->nullable()->comment('電話');
            $table->text('message')->nullable()->comment('訊息');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}; 