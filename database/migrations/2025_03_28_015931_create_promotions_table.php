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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description'); // Use text() for longer content
            $table->string('image');
            $table->date('time'); // Use datetime() if you need both date and time
            $table->timestamps();
            $table->text('desc1')->nullable();
            $table->text('desc2')->nullable();
            $table->text('desc3')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
