<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->boolean('favorite')->default(false); 
            $table->string('color', 20);
            $table->integer('order')->default(0);
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
