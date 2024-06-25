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
        Schema::create('packages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('shipment_id');
            $table->unsignedBigInteger('tracking_number')->unique();
            $table->string('package_image')->nullable();
            $table->string('description');
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('status')->default('pending');
            $table->boolean('arrived')->default(false);
            $table->timestamps();

            $table->index('shipment_id');
            $table->index('tracking_number');
            $table->index('status');
            $table->index('arrived');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
