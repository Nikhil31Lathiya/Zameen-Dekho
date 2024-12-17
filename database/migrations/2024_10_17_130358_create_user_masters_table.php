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
        Schema::create('user_masters', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('contact_no')->unique();
            $table->string('username')->unique();
            $table->text('password');
            $table->enum('role',['admin','user']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_masters');
    }
};
