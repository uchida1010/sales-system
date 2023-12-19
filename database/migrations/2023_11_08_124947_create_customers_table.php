<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->cascadeOnUpdate()->commit('入力者ID');
            $table->foreignId('personincharge_id')->nullable()->cascadeOnUpdate()->commit('担当者ID');
            $table->string('company')->commit('顧客名');
            $table->string('name')->commit('担当者名');
            $table->string('address')->nullable()->commit('住所');
            $table->string('telephone')->nullable()->commit('電話番号');
            $table->string('cellphone')->nullable()->commit('携帯番号');
            $table->string('email')->nullable()->commit('メールアドレス');
            $table->string('remarks')->nullable()->commit('備考');
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
        Schema::dropIfExists('customers');
    }
};
