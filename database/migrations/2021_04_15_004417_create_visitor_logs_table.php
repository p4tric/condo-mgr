<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_logs', function (Blueprint $table) {
            $table->id();
            $table->string('entryDate');
            $table->string('exitDate');
            $table->timestamps();

            $table->foreignId('visitor_id')
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('unit_id')
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            /*
            $table->foreign('visitor_id')
              ->references('id')
              ->on('visitors')
              ->onDelete('cascade');
            $table->foreign('unit_id')
              ->references('id')
              ->on('units')
              ->onDelete('cascade');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitor_logs');
    }
}
