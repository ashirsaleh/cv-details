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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone_number');
            $table->timestamps();
        });

        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained()->onDelete('cascade');
            $table->string('institution_name');
            $table->string('degree');
            $table->year('graduation_year');
            $table->timestamps();
        });

        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained()->onDelete('cascade');
            $table->string('company_name');
            $table->string('role');
            $table->string('duration');
            $table->timestamps();
        });

        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
        Schema::dropIfExists('work_experiences');
        Schema::dropIfExists('education');
        Schema::dropIfExists('applicants');
    }
};
