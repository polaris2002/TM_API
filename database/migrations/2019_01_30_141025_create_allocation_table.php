<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocation', function (Blueprint $table) {
            $table->string('CP_ID', 30);
            $table->string('CA_ID', 30);
            $table->string('DR_ID', 30);
            $table->string('AC_ID', 30);
            $table->string('DS_ID', 30);
            $table->date('AL_DATE');
            $table->string('AL_ITEM', 100);
            $table->tinyInteger('AL_QTY');
            $table->double('AL_UNIT_COST', 15, 3);
            $table->string('AL_WORK_TIME', 30);
            $table->string('AL_LOAD_PLACE', 100);
            $table->string('AL_DISCHARGE_PLACE', 100);
            $table->double('AL_DEMAND_AMT', 15, 3);
            $table->double('AL_PAY_AMT', 15, 3);
            $table->float('AL_FEE_RATE', 8, 3);
            $table->double('AL_FEE', 15, 3);
            $table->string('AL_NOTE', 255);
            $table->string('INPUT_ID', 30);
            $table->timestamp('INPUT_DATE');
            $table->string('UPDATE_ID', 30);
            $table->timestamp('UPDATE_DATE');
            $table->primary(['CP_ID', 'CA_ID', 'DR_ID', 'AC_ID', 'DS_ID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('allocation')) {
            Schema::dropIfExists('allocation');
        }

    }
}
