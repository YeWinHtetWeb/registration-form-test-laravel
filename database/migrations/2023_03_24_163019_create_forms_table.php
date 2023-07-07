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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('fb_acc');
            $table->integer('phone');
            $table->string('job');
            $table->string('school');
            $table->string('programming')->nullable(true)->default('none');
            $table->string('framework')->nullable(true)->default('none');
            $table->string('web')->nullable(true)->default('none');
            $table->string('class');
            $table->string('payment');
            $table->integer('amount');
            $table->string('screenshot')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
