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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf');
            $table->string('typeevent');
            $table->string('subevent');
            $table->string('event');
            $table->string('dataevent');
            $table->string('city');
            $table->string('state');
            $table->string('role');
            $table->string('check');
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
        Schema::dropIfExists('certificates');
    }
};
