<?php namespace Another\Pricelist\Components;

use Cms\Classes\ComponentBase;
use Another\Pricelist\Models\Recovery;

class Recover extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Recover Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function getRecovery()
        {
             return Recovery::orderBy('cat_parent_id')->get();
        }
}
