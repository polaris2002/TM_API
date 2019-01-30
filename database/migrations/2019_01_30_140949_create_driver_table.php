<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table) {
            $table->string('CP_ID', 30);
            $table->string('DR_ID', 30);
            $table->string('DR_NM', 50);
            $table->string('DR_POS', 50)->nullable();
            $table->string('DR_DPT', 50)->nullable();
            $table->string('DR_REG_NO', 15)->nullable();
            $table->string('DR_TEL', 20)->nullable();
            $table->string('DR_HP', 20)->nullable();
            $table->date('DR_JOIN_DATE')->nullable();
            $table->string('DR_LCS_NO', 30)->nullable();
            $table->string('DR_LCS_TYPE', 20)->nullable();
            $table->string('DR_EMAIL', 50)->nullable();
            $table->string('DR_ADD', 200)->nullable();
            $table->string('DR_OTR', 255)->nullable();
            $table->string('INPUT_ID', 30)->nullable();
            $table->timestamp('INPUT_DATE')->nullable();
            $table->string('UPDATE_ID', 30)->nullable();
            $table->timestamp('UPDATE_DATE')->nullable();
            $table->primary(['CP_ID', 'DR_ID']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('driver')) {
            Schema::dropIfExists('driver');
        }

    }
}
