<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->string('CP_ID', 30);
            $table->string('CA_ID', 30);
            $table->string('CA_NO', 20);
            $table->string('CA_WK_PLACE', 100);
            $table->string('CA_CP_NM', 100);
            $table->string('CA_CP_CEO', 50);
            $table->string('CA_CP_REG_NO', 15);
            $table->string('CA_CP_TYPE', 200);
            $table->string('CA_CP_ITEM', 200);
            $table->string('CA_CP_TEL', 20);
            $table->string('CA_OWN_REG_NO', 20);
            $table->string('CA_NM', 100);
            $table->string('CA_LOAD', 100);
            $table->string('CA_TON', 10);
            $table->string('CA_YEAR', 10);
            $table->string('CA_VIN', 20);
            $table->double('CA_MAIN_COST', 15, 3);
            $table->string('CA_RPT_YN', 1);
            $table->string('CA_CP_ADD', 200);
            $table->string('CA_CP_ZIP', 15);
            $table->string('CA_OTR', 255);
            $table->string('CA_OWN_NM', 50);
            $table->string('CA_HTX', 50);
            $table->string('CA_PAY_SND', 50);
            $table->string('CA_USE_YN', 1);
            $table->string('INPUT_ID', 30);
            $table->timestamp('INPUT_DATE');
            $table->string('UPDATE_ID', 30);
            $table->timestamp('UPDATE_DATE');
            $table->primary(['CP_ID', 'CA_ID']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('car')) {
            Schema::dropIfExists('car');
        }
    }
}
