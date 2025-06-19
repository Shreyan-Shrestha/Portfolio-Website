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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->string('jobtitle');
            $table->string('number');
            $table->string('email');
            $table->string('address');
            $table->string('aboutshort');
            $table->text('aboutlong');
            $table->string('photo')->nullable();
            $table->string('github');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
