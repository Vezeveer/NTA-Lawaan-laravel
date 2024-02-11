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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project');
            $table->string('aipRefCode');
            $table->string('activityDesc');
            $table->string('impOffice');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('expectedOutput');
            $table->decimal('fundingServices');
            $table->decimal('personalServices');
            $table->decimal('maint');
            $table->decimal('capitalOutlay');
            $table->decimal('total');
            $table->date('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
