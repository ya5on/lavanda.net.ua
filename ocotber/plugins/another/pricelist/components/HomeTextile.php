<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\HomeTextiles;

class HomeTextile extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'HomeTextiles Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getHomeTextiles()
    {
         return HomeTextiles::orderBy('cat_parent_id')->get();
    }


}
