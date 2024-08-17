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
        Schema::create('clinics_app1', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telf');
            // $table->unsignedInteger('created_at');
            // $table->unsignedInteger('updated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics_app1');
    }
};
