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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('team_logo')->nullable();
            $table->string('overview')->nullable();
            $table->string('team_image')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('manager_image')->nullable();
            $table->string('home_kit_image')->nullable();
            $table->string('away_kit_image')->nullable();
            $table->integer('year')->nullable(); 
            $table->string('stadium_name')->nullable();
            $table->integer('division')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
