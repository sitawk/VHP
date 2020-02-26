<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class HolderPins extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_holder_pins';

    /**
     * @var array Validation rules
     */
     public $belongsTo [
       'certificate' => ['Codersocean\Honopins\Models\Certificate','key'=>'certificate_id'],
       'organization' => ['Codersocean\Honorpins\Models\Organization','key'=>'org_id'],
       'pin' => ['Codersocean\Honorpins\Models\Pin','key'=>'pin_id'],
       'holder' => ['Codersocean\Honorpins\Models\Holder','key'=>'holder_id']
     ];
    public $rules = [
    ];
}
