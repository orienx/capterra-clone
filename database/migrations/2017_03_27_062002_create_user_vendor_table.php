<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVendorTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_vendor', function(Blueprint $table) {
      $table->integer('vendor_id')->unsigned()->index();
      $table->integer('user_id')->unsigned()->index();

      $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('user_vendor');
  }
}
