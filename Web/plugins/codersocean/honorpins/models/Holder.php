<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class Holder extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_holders';

    /**as
     * @var array Validation rules
     */
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
     ];
    public $rules = [
    ];
}
