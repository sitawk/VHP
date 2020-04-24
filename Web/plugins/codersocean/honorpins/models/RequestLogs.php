<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class RequestLogs extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_request_logs';

    /**
     * @var array Validation rules
     */
     public $belongsTo =[
'holderpin' => [
           'Codersocean\Honorpins\Models\HolderPins',
           'table' => 'codersocean_honorpins_holder_pins',
           'key' => 'holderpin_id',
       ],
     ];
    public $rules = [
    ];
}
