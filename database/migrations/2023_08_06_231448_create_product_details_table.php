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
    Schema::create('product_details', function (Blueprint $table) {
      $table->id();
      $table->string('detail');

      $table->unsignedBigInteger('products_id');
      $table->foreign('products_id')
        ->references('id')
        ->on('products')
        ->onUpdate('cascade')
        ->onDelete('cascade');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('product_details');
  }
};
