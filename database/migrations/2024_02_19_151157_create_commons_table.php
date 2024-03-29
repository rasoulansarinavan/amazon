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
        Schema::create('commons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('percentage');
            $table->unsignedBigInteger('discount_ceiling')->nullable();
            $table->unsignedBigInteger('minimal_order_amount')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('end_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commons');
    }
};
