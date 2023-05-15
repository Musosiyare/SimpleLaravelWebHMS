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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('id');
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('telephone',50);
            $table->string('email',50)->nullable();
            $table->string('insurance_id',50)->nullable();
            $table->unsignedInteger('register_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
