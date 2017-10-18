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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('street')->nullable();
            $table->string('housenumber')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('residence')->nullable();
            $table->string('street2')->nullable();
            $table->string('housenumber2')->nullable();
            $table->string('zip_code2')->nullable();
            $table->string('residence2')->nullable();
            $table->string('cp_name')->nullable();
            $table->string('cp_lastname')->nullable();
            $table->string('cp_insertion')->nullable();
            $table->string('tele');
            $table->string('tele2')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('mail')->nullable();
            $table->float('limit')->default(0);
            $table->string('vat_code')->nullable();
            $table->tinyInteger('prospect')->default(0);
            $table->string('banknumber')->nullable();
            $table->tinyInteger('creditworthy')->default(0);
            $table->tinyInteger('bcr')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
