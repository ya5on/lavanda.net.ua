<?php namespace Another\PriceList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnotherPricelist2 extends Migration
{
    public function up()
    {
        Schema::table('another_pricelist_2', function($table)
        {
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
        });
    }
    
    public function down()
    {
        Schema::table('another_pricelist_2', function($table)
        {
            $table->dropColumn('title_ru');
            $table->dropColumn('title_uk');
            $table->dropColumn('price_kiev_1');
            $table->dropColumn('price_zaporozhe_1');
            $table->dropColumn('price_energodar_1');
            $table->dropColumn('price_kiev_2');
            $table->dropColumn('price_zaporozhe_2');
            $table->dropColumn('price_energodar_2');
            $table->dropColumn('price_kiev_3');
            $table->dropColumn('price_zaporozhe_3');
            $table->dropColumn('price_energodar_3');
        });
    }
}
