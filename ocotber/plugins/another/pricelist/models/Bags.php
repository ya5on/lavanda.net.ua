<?php namespace Another\PriceList\Models;

use Model;

/**
 * Model
 */
class Bags extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'another_pricelist_3';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
