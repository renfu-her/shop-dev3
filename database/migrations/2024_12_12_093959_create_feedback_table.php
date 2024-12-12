<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable()->comment('電子郵件');
            $table->longText('message')->nullable()->comment('留言');
            $table->boolean('is_read')->default(false)->comment('是否已讀');
            $table->boolean('is_replied')->default(false)->comment('是否已回覆');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
