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
            Schema::create('team_fixture', function (Blueprint $table) {
                $table->id();
                // inheriting ID's from owner and cr table
                $table->unsignedBigInteger('fixture_id');
                $table->unsignedBigInteger('team_id');
    
    
                // teling the database which data each foreign key represents
                $table->foreign('fixture_id')->references('id')->on('fixtures')->onUpdate('cascade')->onDelete('restrict');
                $table->foreign('team_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('restrict');
    
                $table->timestamps();
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_fixture');
    }
};
