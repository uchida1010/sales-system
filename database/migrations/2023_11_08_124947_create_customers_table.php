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
            $table->foreignId('user_id')->nullable()->commit('入力者ID');
            $table->foreignId('pic_id')->nullable()->commit('担当者ID');
            $table->string('company')->commit('会社名');
            $table->string('name')->commit('顧客名');
            $table->string('address')->commit('住所');
            $table->string('remarks')->commit('備考');
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
