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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('salary', 8, 2);
            $table->string('company');
            $table->string('logo')->default('https://i.pinimg.com/originals/ec/d9/c2/ecd9c2e8ed0dbbc96ac472a965e4afda.jpg');
            $table->string('work_model');
            $table->string('workplace');
            $table->string('email');
            $table->string('workschedule');
            $table->string('phone');
            $table->string('website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
