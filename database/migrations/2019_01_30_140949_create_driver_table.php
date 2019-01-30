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
            $table->string('DR_POS', 50);
            $table->string('DR_DPT', 50);
            $table->string('DR_REG_NO', 15);
            $table->string('DR_TEL', 20);
            $table->string('DR_HP', 20);
            $table->date('DR_JOIN_DATE');
            $table->string('DR_LCS_NO', 30);
            $table->string('DR_LCS_TYPE', 20);
            $table->string('DR_EMAIL', 50);
            $table->string('DR_ADD', 200);
            $table->string('DR_OTR', 255);
            $table->string('INPUT_ID', 30);
            $table->timestamp('INPUT_DATE');
            $table->string('UPDATE_ID', 30);
            $table->timestamp('UPDATE_DATE');
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
