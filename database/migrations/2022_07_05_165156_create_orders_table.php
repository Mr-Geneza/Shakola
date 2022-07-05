<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function (Blueprint $table) {
			$table->unsignedBigInteger('order_id');
			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products');
			$table->unsignedInteger('parent_product_id');
			$table->unsignedInteger('line_item_id');
			$table->decimal('price', 9, 2);
			$table->decimal('cost', 9, 2);
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('orders');
	}
}
