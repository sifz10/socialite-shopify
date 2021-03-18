<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stores', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name');
              $table->string('domain');
              $table->timestamps();
          });


          Schema::create('store_users', function (Blueprint $table) {
              $table->integer('store_id');
              $table->integer('user_id');
              $table->unique(['store_id', 'user_id']);
          });


          Schema::create('store_charges', function (Blueprint $table) {
              $table->increments('id');
              $table->unsignedInteger('user_id');
              $table->string('name');
              $table->string('plan');
              $table->integer('quantity');
              $table->timestamp('trial_ends_at')->nullable();
              $table->timestamp('ends_at')->nullable();
              $table->timestamps();
          });

          Schema::create('user_providers', function (Blueprint $table) {
              $table->increments('id');
              $table->integer('user_id')->unsigned();
              $table->string('provider');
              $table->string('provider_user_id');
              $table->string('provider_token')->nullable();
              $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('stores');
      Schema::dropIfExists('stores_users');
      Schema::dropIfExists('store_charges');
      Schema::dropIfExists('user_providers');
    }
}
