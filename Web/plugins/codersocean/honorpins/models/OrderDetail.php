<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class OrderDetail extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_order_detail';

    /**
     * @var array Validation rules
     */
     public $belongsTo = [

        'order' => ['Codersocean\Honorpins\Models\Order','key'=> 'order_id'],
        
    ];
    public $rules = [
    ];
}
