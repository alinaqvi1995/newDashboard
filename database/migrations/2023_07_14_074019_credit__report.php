<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_report', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 255);
            $table->string('lastName', 255);
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('ssn', 255)->nullable();
            $table->string('dob', 255)->nullable();
            $table->string('houseNumber', 255)->nullable();
            $table->string('quadrant', 255)->nullable();
            $table->string('streetName', 255)->nullable();
            $table->string('streetType', 255)->nullable();
            $table->string('zip', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('pdfReportId', 255)->nullable();
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
        Schema::dropIfExists('credit_report');
    }
};
