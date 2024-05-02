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
        Schema::create('skill_master', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('entry_level');
            $table->string('basic');
            $table->string('intermediate');
            $table->string('advanced');
            $table->string('export');

            $table->unsignedBigInteger('skill_categories_id');
            $table->foreign('skill_categories_id')->references('id')->on('skill_categories')->onDelete('cascade');

            $table->unsignedBigInteger('skill_sub_categories_id');
            $table->foreign('skill_sub_categories_id')->references('id')->on('skill_sub_categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_master');
    }
};
