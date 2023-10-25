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
        Schema::create('school_managements', function (Blueprint $table) {
            $table->id();
            $table->string('studentname');
            $table->integer('age');
            $table->string('class');
            $table->integer('rollno');
            $table->string('emailid');
            $table->string('studentimage');
            $table->string('studentcity');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_managements');
    }
};
