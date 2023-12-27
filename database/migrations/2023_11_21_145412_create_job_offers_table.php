<?php

use App\Models\ContractType;
use App\Models\Establishment;
use App\Models\Job;
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
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Job::class)->nullable()->constrained();
            $table->foreignIdFor(ContractType::class)->nullable()->constrained();
            $table->foreignId('employer_id')->references('id')->on('users');
            $table->string('title');
            $table->longText('content');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
