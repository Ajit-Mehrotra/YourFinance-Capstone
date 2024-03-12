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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debts_id')->constrained()->cascadeOnDelete();
            $table->string('card_name');
            $table->string('card_type');
            $table->decimal('number', 13, 2)->default(0); //not sure if i should store the number as a decimal or a bigint or something
            $table->decimal('credit_limit', 13, 2)->default(0);
            $table->text('benefits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_cards');
    }
};