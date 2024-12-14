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
        Schema::create('vehicle_service', function (Blueprint $table) {
            $table->id();
            $table->string('TrackID')->nullable();
            $table->string('ClientID');
            $table->string('phone');
            $table->string('other_phone')->nullable();
            $table->string('service_type')->nullable();
            $table->string('service_category')->nullable();
            $table->string('boarder')->nullable();
            $table->integer('status')->default('1');
            $table->string('description')->nullable();
            $table->integer('goods_value')->nullable();
            $table->integer('budget_min')->nullable();
            $table->integer('budget_max')->nullable();
            $table->string('invoice')->nullable();
            $table->string('desc_file')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_service');
    }
};
