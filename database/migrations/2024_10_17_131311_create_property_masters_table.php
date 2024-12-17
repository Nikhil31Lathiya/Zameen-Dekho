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
        Schema::create('property_masters', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('owner');
            $table->string('owner_contact');
            $table->text('address')->unique();
            $table->string('image_url');
            $table->text('description');
            $table->bigInteger('amount');
            $table->enum('action',['rent','sale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_masters');
    }
};
