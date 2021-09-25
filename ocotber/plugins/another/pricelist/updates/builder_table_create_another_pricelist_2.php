<?php namespace Another\PriceList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnotherPricelist2 extends Migration
{
    public function up()
    {
        Schema::create('another_pricelist_2', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('another_pricelist_2');
    }
}
