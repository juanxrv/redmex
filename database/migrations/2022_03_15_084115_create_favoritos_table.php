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
