<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fummung');
            $table->string('email')->nullable();
            $table->string('mobile');
            $table->string('zip_code');
            $table->string('address');
            $table->string('address_detail');
            $table->enum('gender', ['M', 'F']);
            $table->integer('age')->nullable();
            $table->integer('pum');
            $table->integer('hwajang');
            $table->integer('abgil')->nullable();
            $table->integer('ditgil');
            $table->integer('git')->nullable();
            $table->integer('gitgode');
            $table->integer('gindong');
            $table->integer('subyub')->nullable();
            $table->integer('subnubi')->nullable();
            $table->integer('gitsubi')->nullable();
            $table->integer('chima');
            $table->integer('chongjang');
            $table->integer('jedan')->nullable();
            $table->integer('jeabong')->nullable();
            $table->integer('design')->nullable();
            $table->dateTime('delivery_at');
            $table->softDeletes();
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
        Schema::dropIfExists('order');
    }
}
