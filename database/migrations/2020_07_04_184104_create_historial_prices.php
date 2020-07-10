<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialPrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onUpdate('cascade');
            $table->foreignId('unit_id')->constrained()->onUpdate('cascade');
            $table->decimal('detalle', 6, 4);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->char('type', 4); //BUY or SELL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_prices');
    }
}
