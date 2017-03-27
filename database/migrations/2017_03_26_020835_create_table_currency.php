<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCurrency extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('currencies', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('currency_name');
            $table->string('currency_code', 10)->index();
            $table->string('currency_symbol', 25);
            $table->string('currency_format', 50);
            $table->decimal('currency_exchange_rate',10,2);
            $table->boolean('currency_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('currencies');
    }

}
