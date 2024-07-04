<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('males', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id');//送信先のid
            $table->string('male_title');//メールのタイトル
            $table->string('male_body');//メールの本文
            $table->integer('item_id');//アイテムのid
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('males');
    }
};
