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
        if (!Schema::hasTable('login_details')) {
            Schema::create('login_details', function (Blueprint $table) {
                $table->id();
                $table->string('user_id');
                $table->string('ip');
                $table->dateTime('date');
                $table->text('details');
                $table->string('type');
                $table->integer('created_by');
                $table->unsignedBigInteger('business')->default(0);
                $table->timestamps();

                $table->foreign('business')->references('id')->on('businesses')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_details');
    }
};
