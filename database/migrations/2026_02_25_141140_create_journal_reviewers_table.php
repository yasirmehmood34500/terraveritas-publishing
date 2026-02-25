<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('journal_reviewers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('journal_id')->default(0);
            $table->string('name');
            $table->string('department')->nullable();
            $table->string('email')->nullable();
            $table->string('official_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_reviewers');
    }
};
