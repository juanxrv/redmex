<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('historials', function (Blueprint $table) {
      $table->id();
      $table->integer('media_id');
      $table->string('media_type');
      $table->string('media_name');
      $table->text('media_overview');
      $table->string('media_genre');
      $table->double('media_vote');
      $table->string('media_img');
      $table->foreignId('user_id')
            ->references('id')->on('users')
            ->cascadeOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('historials');
  }
};
