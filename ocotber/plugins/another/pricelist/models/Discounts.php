<?php namespace Another\PriceList\Models;

use Model;

/**
 * Model
 */
class Discounts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'another_pricelist_8';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
