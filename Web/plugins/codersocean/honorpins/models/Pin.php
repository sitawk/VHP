<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class Pin extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_pins';

    /**
     * @var array Validation rules
     */
     public $belongsTo = [

       'organization' => [
           'Codersocean\Honorpins\Models\Organization',
           'table' => 'codersocean_honorpins_organizarions',
           'key' => 'org_id'
       ],
    ];
    public $rules = [
    ];
}
