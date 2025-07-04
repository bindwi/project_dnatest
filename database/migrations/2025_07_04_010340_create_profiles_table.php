<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->uuid('api_id')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('sex')->nullable();
            $table->integer('birth_year')->nullable();
            $table->timestamp('created_at_api')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
