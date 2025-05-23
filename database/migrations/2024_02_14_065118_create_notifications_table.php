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
        if(!Schema::hasTable('notifications'))
        {
            Schema::create('notifications', function (Blueprint $table) {
                $table->id();
                $table->string('module')->nullable();
                $table->string('type', 188)->nullable();
                $table->string('action')->nullable();
                $table->string('status')->nullable();
                $table->string('permissions')->nullable();
                $table->integer('business_id')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
