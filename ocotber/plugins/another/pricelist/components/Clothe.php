<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\Clothes;

class Clothe extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Clothes Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function getClothes()
    {
    $locale = app()->getLocale();

    if (app()->isLocale('ru')) {
        return Clothes::orderBy('title_ru')->get();
    }else{
        return Clothes::orderBy('title_uk')->get();
    }
    }



}

