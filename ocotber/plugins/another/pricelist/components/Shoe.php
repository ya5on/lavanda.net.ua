<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\Shoes;

class Shoe extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Shoes Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function getShoes()
    {
    $locale = app()->getLocale();

    if (app()->isLocale('ru')) {
         return Shoes::orderBy('title_ru')->get();
    }else{
         return Shoes::orderBy('title_uk')->get();
    }
    }
}
