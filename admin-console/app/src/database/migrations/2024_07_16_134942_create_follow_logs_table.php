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
        Schema::create('follow_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');//ユーザーのid
            $table->integer('target_user_id');//フォローするユーザーのid
            $table->integer('action');//フォローするのか外すのか
            $table->timestamps();
            //フォローの登録/解除がintegerなのは、1で登録2で解除という判定にするから。

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_logs');
    }
};
