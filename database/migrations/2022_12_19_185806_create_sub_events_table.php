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
        Schema::create('sub_events', function (Blueprint $table) {
            $table->id();
            $table->string("event_id");
            $table->string("guest_id");
            $table->string("type"); // Oficina, Palestra, Visita, Workshop, Curso
            $table->string("name");
            $table->datetime("date");
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
        Schema::dropIfExists('sub_events');
    }
};
