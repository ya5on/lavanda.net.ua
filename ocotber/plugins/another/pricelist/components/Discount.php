<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\Discounts;

class Discount extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Discount Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function getDiscounts()
        {
             return Discounts::orderBy('cat_parent_id')->get();
        }
}
