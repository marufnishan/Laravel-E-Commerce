<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->enum('status',['ordered','delivered','canceled'])->default('ordered');
            $table->date('delivered_date')->nullable();
            $table->date('canceled_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->enum('status',['ordered','delivered','canceled'])->default('ordered');
            $table->date('delivered_date');
            $table->date('canceled_date');
        });
    }
}
