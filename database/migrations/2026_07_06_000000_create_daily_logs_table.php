<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('daily_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->date('log_date');
            $table->unsignedInteger('rebalances')->default(0);
            $table->unsignedInteger('transports')->default(0);
            $table->unsignedInteger('battery_swaps')->default(0);
            $table->unsignedInteger('quality_checks')->default(0);
            $table->timestamps();

            $table->unique(['user_id', 'log_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daily_logs');
    }
};
