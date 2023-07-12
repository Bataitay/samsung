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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->tinyInteger('type')->comment('1: tủ lạnh, 2: máy giặt, 3: điện thoại, 4: đồng hồ, 5: Loa, 5: Màn hình, 6: đồ gia dụng, 7: Loa, 8: TV&AV');
            $table->string('description');
            $table->string('price_display');
            $table->integer('promotion_price');
            $table->integer('price');
            $table->integer('afterTaxPrice');
            $table->string('afterTaxPriceDisplay');
            $table->tinyInteger('stock')->comment('0: hết hàng, 1: còn hàng')->nullable();
            $table->longText('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
