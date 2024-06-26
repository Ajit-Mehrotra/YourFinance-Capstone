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
        Schema::create('debts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('lenders_id')->constrained()->cascadeOnDelete();
            $table->string('debt_name');
            $table->decimal('principle', 13, 2)->default(0);
            $table->decimal('balance', 13, 2)->default(0);
            $table->string('pmt_frequency');
            $table->decimal('recurring_pmt_amt', 13, 2)->default(0);
            $table->decimal('apr_interest', 13, 2)->default(0);
            $table->decimal('days_interest_deffered', 13, 2)->default(0);
            $table->decimal('days_pmt_deffered', 13, 2)->default(0);
            $table->date('date_received');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debts');
    }
};