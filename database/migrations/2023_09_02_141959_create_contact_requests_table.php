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
    Schema::create('contact_requests', function (Blueprint $table) {
      $table->id();
      $table->string('request_type');
      $table->string('firstname');
      $table->string('name');
      $table->string('address')->nullable();
      $table->string('location')->nullable();
      $table->string('email');
      $table->string('phone')->nullable();
      $table->date('date_of_birth')->nullable();
      $table->text('message')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('inquiries');
  }
};
