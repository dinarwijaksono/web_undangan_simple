<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmationOfAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmation_of_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('product_code', 10);
            $table->string('name', 20);
            $table->string('confirmation');
            $table->string('message', 100);
            $table->bigInteger('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmation_of_attendances');
    }
}
