<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\Bags;

class Bag extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Bags Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function getBags()
        {
         $locale = app()->getLocale();

         if (app()->isLocale('ru')) {
             return Bags::orderBy('title_ru')->get();
         }else{
             return Bags::orderBy('title_uk')->get();
        }
        }
}
