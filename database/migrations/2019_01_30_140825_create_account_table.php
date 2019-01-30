<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->string('CP_ID', 30);
            $table->string('AC_ID', 30);
            $table->string('AC_NM', 100);
            $table->string('AC_TEL', 20);
            $table->string('AC_FAX', 20);
            $table->string('AC_CEO', 50);
            $table->string('AC_REG_NO', 15);
            $table->string('AC_EMAIL', 50);
            $table->string('AC_TYPE', 200);
            $table->string('AC_ITEM', 200);
            $table->string('AC_OTR_CONTACT', 100);
            $table->string('AC_ADD', 200);
            $table->string('AC_EMP', 50);
            $table->string('AC_NOTE', 255);
            $table->string('INPUT_ID', 30);
            $table->timestamp('INPUT_DATE');
            $table->string('UPDATE_ID', 30);
            $table->timestamp('UPDATE_DATE');
            $table->primary(['CP_ID', 'AC_ID']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('account')) {
            Schema::dropIfExists('account');
        }
    }
}
