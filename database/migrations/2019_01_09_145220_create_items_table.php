<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cname');
            $table->string('ename')->nullable();
            $table->text('description')->nullable();
//            $table->binary('photo')->nullable();
            $table->integer('cid')->unsigned();
            $table->foreign('cid')->references('id')->on('categories');
            $table->timestamps();
        });
// Laravel cannot create 'MEDIUMBLOB' column directly.
        DB::statement("ALTER TABLE `items` ADD `photo` MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
