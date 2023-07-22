<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DataTables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('number')->nullable();
            $table->float('address')->nullable();
            $table->string('name')->nullable();
            $table->date('date')->nullable();
            $table->text('massage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DataTables');
    }
}
