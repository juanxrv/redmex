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
    Schema::create('favoritos', function (Blueprint $table) {
      $table->id();
      $table->integer('media_id');
      $table->string('media_type');
      $table->string('media_name');
      $table->string('media_overview');
      $table->string('media_genre');
      $table->double('media_vote');
      $table->string('media_img');
      $table->string('cliente_email');
      $table->foreign('cliente_email')
            ->references('email')
            ->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('favoritos');
  }
};
