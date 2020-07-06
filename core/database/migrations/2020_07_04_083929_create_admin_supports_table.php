<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_supports', function (Blueprint $table) {
            $table->id();
            $table->string('currency_name')->unique();
            $table->float('transfer_charge');
            $table->integer('reffered_bouns_ammount');
            $table->integer('signup_bonus');
            $table->float('interest_ammount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_supports');
    }
}
