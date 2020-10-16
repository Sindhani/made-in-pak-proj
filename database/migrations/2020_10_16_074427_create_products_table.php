<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('seller_id');
            $table->string('product_name');
            $table->string('product_type');
            $table->string('brand_name')->nullable();
            $table->unsignedBigInteger('price')->nullable();
            $table->char('modal_no',23)->nullable();
            $table->char('description',180)->nullable();
            $table->integer('size')->nullable();
            $table->char('certification',23)->nullable();
            $table->string('color')->nullable();
            $table->char('supply_time',12)->nullable();
            $table->string('placeoforigin')->nullable();
            $table->char('shelf_life',12)->nullable();
            $table->string('style')->default('fresh');
            $table->string('feature')->nullable();
            $table->string('port')->nullable();
            $table->string('video')->nullable();
            $table->boolean('active')->default(1);
            $table->unsignedBigInteger('inventory')->default(1200);
            $table->char('supply_ability',50)->nullable();
            $table->char('packaging_detail',45)->nullable();
            $table->char('weight',12)->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
