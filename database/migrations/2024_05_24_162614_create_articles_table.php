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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('term');
            $table->string('definition');
            $table->text('description')->nullable();
            $table->text('meaning')->nullable();
            $table->text('example')->nullable();
            $table->text('more_information')->nullable();

            //FK de la tabla references
            $table->foreignId('reference_id')
            ->nullable()
            ->constrained()
            ->nullOnDelete();

            //FK de la tabla images
            $table->foreignId('image_id')
            ->nullable()
            ->constrained()
            ->nullOnDelete();
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
