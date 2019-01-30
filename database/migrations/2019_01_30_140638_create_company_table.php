<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->string('CP_ID', 30);
            $table->tinyInteger('CP_SEQ');
            $table->string('CP_NM', 100)->nullable();
            $table->string('CP_REG_NO', 15)->nullable();
            $table->string('CP_CEO', 50)->nullable();
            $table->string('CP_COR_NO', 15)->nullable();
            $table->string('CP_TEL', 20)->nullable();
            $table->string('CP_FAX', 20)->nullable();
            $table->string('CP_ZIP', 15)->nullable();
            $table->string('CP_ADD', 200)->nullable();
            $table->string('CP_TYPE', 200)->nullable();
            $table->string('CP_ITEM', 200)->nullable();
            $table->string('CP_BANK', 100)->nullable();
            $table->binary('CP_SEAL')->nullable();
            $table->string('INPUT_ID', 30)->nullable();
            $table->timestamp('INPUT_DATE')->nullable();
            $table->string('UPDATE_ID', 30)->nullable();
            $table->timestamp('UPDATE_DATE')->nullable();
            $table->primary(['CP_ID', 'CP_SEQ']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('company')){
            Schema::dropIfExists('company');
        }
    }
}
