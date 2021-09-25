<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\Others;

class Other extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Other Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function getOthers()
         {
              return Others::orderBy('cat_parent_id')->get();
         }
}
