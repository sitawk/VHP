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


     public $belongsTo =[
       'certificate' => [
           'Codersocean\Honorpins\Models\Certificate',
           'table' => 'codersocean_honorpins_certificates',
           'key' => 'certificate_id',
       ],
       'organization' => [
           'Codersocean\Honorpins\Models\Organization',
           'table' => 'codersocean_honorpins_organizarions',
           'key' => 'org_id',
       ],
       'pin' => [
           'Codersocean\Honorpins\Models\Pin',
           'table' => 'codersocean_honorpins_pins',
           'key' => 'pin_id',
       ],

     ];
    public $rules = [
    ];
}
