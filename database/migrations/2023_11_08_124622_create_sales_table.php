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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->commit('顧客ID');
            $table->foreignId('product_id')->nullable()->commit('商品ID');
            $table->foreignId('estimate_id')->nullable()->commit('見積ID');
            $table->foreignId('purchaser_id')->nullable()->commit('仕入担当者ID');
            $table->foreignId('seller_id')->nullable()->commit('販売担当者ID');
            $table->foreignId('user_id')->nullable()->commit('入力者ID');
            $table->date('payment_date')->nullable()->commit('支払日');
            $table->boolean('is_payment')->commit('入金の有無');
            $table->date('transfer_date')->commit('入金日');
            $table->integer('purchase_price')->commit('仕入単価');
            $table->integer('purchase_quantity')->commit('仕入数量');
            $table->integer('purchase_totals')->commit('仕入額');
            $table->integer('sale_price')->commit('販売単価');
            $table->integer('sale_quantity')->commit('販売数量');
            $table->integer('sale_totals')->commit('販売額');
            $table->string('remark')->commit('備考');
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
        Schema::dropIfExists('sales');
    }
};
