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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->integer('feature_id');
            $table->string('name');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('client')->nullable();
            $table->date('date')->nullable();
            $table->string('value')->nullable();
            $table->string('link')->nullable();
            $table->longText('description');
            $table->integer('completed')->default(1);
            $table->integer('define')->default(1);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
