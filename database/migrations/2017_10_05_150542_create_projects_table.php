<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('tbl_customers');
            $table->string('name');
            $table->text('description');
            $table->date('start_date');
            $table->date('deadline');
            $table->boolean('maintained_contract')->nullable();
            $table->text('applications');
            $table->text('hardware');
            $table->string('operating_system');
            $table->boolean('completed')->nullable();
            $table->integer('price');
            $table->integer('amount');
            $table->tinyInteger('kind_of_terms');
            $table->date('first_payday');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_projects');
    }
}
