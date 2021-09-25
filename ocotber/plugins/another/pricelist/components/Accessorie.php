<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\Accessories;

class Accessorie extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Accessories Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function getAccessories()
        {
             $locale = app()->getLocale();

                 if (app()->isLocale('ru')) {
                     return Accessories::orderBy('title_ru')->get();
                 }else{
                     return Accessories::orderBy('title_uk')->get();
                 }
        }
}
