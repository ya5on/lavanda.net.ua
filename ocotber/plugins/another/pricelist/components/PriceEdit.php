<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\PriceEdits;

class PriceEdit extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'PriceEdit Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

//    public function getPriceEdits($price_edit)
//    {
//        return PriceEdits::where('id', 1)->get();
//
//    }


}
