<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('street');
            $table->string('housenumber');
            $table->string('zip code');
            $table->string('residence');
            $table->string('cp_name');
            $table->string('cp_lastname');
            $table->string('cp_insetrion');
            $table->string('tele');
            $table->string('tele2');
            $table->string('fax_number');
            $table->string('mail');
            $table->string('banknumber');
            $table->float('saldo');
            $table->float('limit');
            $table->string('btw_code');
            $table->tinyInteger('prospect');
            $table->string('ledgerbill');
            $table->tinyInteger('credityworthy');
            $table->tinyInteger('bkr');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('tbl_customers');
    }
}
