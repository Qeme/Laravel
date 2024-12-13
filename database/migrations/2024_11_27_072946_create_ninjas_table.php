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
        Schema::create('ninjas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('skill');
            $table->text('bio');
            // create a foreign key relation
            /* 1. constrained() provides a strict rule the column which relate to each other in diff tables [the ninja must have dojo valid id]
               2. onDelete('cascade') which will remove the ninjas data that related to the deleted dojo  */
            $table->foreignId('dojo_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ninjas');
    }
};
