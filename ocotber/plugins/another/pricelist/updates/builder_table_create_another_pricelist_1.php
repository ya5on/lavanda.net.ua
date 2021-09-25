<?php namespace Another\PriceList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnotherPricelist1 extends Migration
{
    public function up()
    {
        Schema::create('another_pricelist_1', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title_ru', 191);
            $table->string('title_uk', 191);
            $table->integer('price_kiev_1');
            $table->integer('price_zaporozhe_1');
            $table->integer('price_energodar_1');
            $table->integer('price_kiev_2');
            $table->integer('price_zaporozhe_2');
            $table->integer('price_energodar_2');
            $table->integer('price_kiev_3');
            $table->integer('price_zaporozhe_3');
            $table->integer('price_energodar_3');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('another_pricelist_1');
    }
}
