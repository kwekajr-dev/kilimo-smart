<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shambas', function (Blueprint $table) {
            $table->id();
            $table->string('jina_la_shamba');
            $table->string('ukubwa_wa_shamba');
            $table->string('aina_ya_zao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shambas');
    }
};
