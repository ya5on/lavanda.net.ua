<?php namespace Another\PriceList;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
        {
            return [
                'name'        => 'Price-list',
                'description' => 'No description provided yet...',
                'author'      => 'Alexander Guy',
                'icon'        => 'icon-list-alt'
            ];
        }
    public function registerComponents()
    {
       return [
       'Another\PriceList\Components\Clothe' => 'clothes',
       'Another\PriceList\Components\Shoe' => 'shoes',
       'Another\PriceList\Components\Bag' => 'bags',
       'Another\PriceList\Components\Accessorie' => 'accessories',
       'Another\PriceList\Components\HomeTextile' => 'hometextiles',
       'Another\PriceList\Components\Recover' => 'recovery',
       'Another\PriceList\Components\Other' => 'others',
       'Another\PriceList\Components\Discount' => 'discounts',
       'Another\PriceList\Components\PriceEdit' => 'priceedits'


       ];

    }
    public function registerMarkupTags()
    {

    }


    public function registerSettings()
    {

    }
}
