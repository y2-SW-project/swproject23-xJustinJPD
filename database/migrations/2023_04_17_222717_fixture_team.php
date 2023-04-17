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
        Schema::create('fixture_team', function (Blueprint $table){
        $table->id();
        $table->unsignedBigInteger('fixture_id');
        $table->unsignedBigInteger('team_id');

        $table->foreign('fixture_id')->references('id')->on('fixtures')->onUpdate('cascade')->onDelete('restrict');
        $table->foreign('team_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixture_team');
    }
};
