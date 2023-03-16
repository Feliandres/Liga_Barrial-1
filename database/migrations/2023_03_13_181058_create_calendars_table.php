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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->dateTime('match_calendar');
            $table->string('local_team_name');
            $table->string('visit_team_name');
            $table->unsignedBigInteger('presidentaso');
            $table->timestamps();

            $table->foreign('presidentaso')
                    ->references('id')
                    ->on('president_asos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
