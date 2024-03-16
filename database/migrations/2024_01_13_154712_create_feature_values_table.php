<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feature_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->integer('feature_id');
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_values');
    }
};
