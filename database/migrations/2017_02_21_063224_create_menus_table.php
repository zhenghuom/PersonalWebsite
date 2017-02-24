<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menus', function (Blueprint $table){
            $table->increments('id');
            $table->string('name',32)->comment('菜单栏名称');
            $table->string('url',255)->comment('菜单URL');
            $table->integer('parent_id')->default(0)->comment('上一级菜单栏ID');
            $table->unsignedSmallInteger('is_show')->default(1)->comment('是否显示，0不显示，1显示');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('menus');
    }
}
