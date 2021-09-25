<?php namespace Another\PriceList\Models;

use Model;

/**
 * Model
 */
class PriceEdits extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'another_pricelist_edit';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
