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
            $table->string('mobile');
            $table->string('zip_code');
            $table->string('address');
            $table->string('address_detail');
            $table->enum('gender', ['M', 'F']);
            $table->string('age')->nullable();
            $table->string('pum')->nullable();
            $table->string('hwajang')->nullable();
            $table->string('abgil')->nullable();
            $table->string('ditgil')->nullable();
            $table->string('git')->nullable();
            $table->string('gitgode')->nullable();
            $table->string('gindong')->nullable();
            $table->string('subyub')->nullable();
            $table->string('subnubi')->nullable();
            $table->string('gitsubi')->nullable();
            $table->string('chima')->nullable();
            $table->string('chongjang')->nullable();
            $table->string('jedan')->nullable();
            $table->string('jeabong')->nullable();
            $table->string('design')->nullable();
            $table->dateTime('delivery_at');
            $table->longText('etc')->nullable();
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
