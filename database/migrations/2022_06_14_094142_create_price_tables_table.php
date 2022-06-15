<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_tables', function (Blueprint $table) {
            $table->id();
            $table->string('from_postcode',45);
            $table->string('to_postcode',45);
            $table->string('from_weight',45);
            $table->string('to_weight',45);
            $table->string('cost', 10);
            $table->string('cost1', 10);
            $table->string('cost2', 10);
            $table->string('cost3', 10);
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
        Schema::dropIfExists('price_tables');
    }
}
