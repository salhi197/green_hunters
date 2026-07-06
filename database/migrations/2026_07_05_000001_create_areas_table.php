<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedTinyInteger('prio');
            $table->decimal('lat', 10, 6);
            $table->decimal('lng', 10, 6);
            $table->unsignedTinyInteger('vans')->default(0);
            $table->unsignedInteger('stops_per_week')->default(0);
            $table->enum('status', ['high', 'mid', 'open'])->default('open');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
