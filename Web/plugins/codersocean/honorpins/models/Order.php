<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_orders';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
