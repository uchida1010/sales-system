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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->cascadeOnUpdate()->comment('入力者ID');
            $table->foreignId('customer_id')->nullable()->cascadeOnUpdate()->comment('顧客ID');
            $table->foreignId('product_id')->nullable()->cascadeOnUpdate()->comment('商品ID');
            $table->foreignId('region')->nullable()->cascadeOnUpdate()->comment('地域ID');
            $table->foreignId('personincharge_id')->nullable()->cascadeOnUpdate()->comment('担当者ID');
            $table->date('estimated_date')->comment('見積日');
            $table->boolean('is_result')->comment('結果');
            $table->string('specification')->commit('仕様');
            $table->string('content')->commit('見積内容');
            $table->integer('quantity')->commit('数量');
            $table->string('reason')->commit('失注理由');
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
        Schema::dropIfExists('estimates');
    }
};
