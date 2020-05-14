<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class Certificate extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_certificates';

    /**
     * @var array Validation rules
     */
     public $belongsTo = [
       'category' => [
           'Codersocean\Honorpins\Models\Categories',
           'table' => 'codersocean_honorpins_categories',
           'key' => 'category_id'
       ],
       'organization' => [
           'Codersocean\Honorpins\Models\Organization',
           'table' => 'codersocean_honorpins_organizarions',
           'key' => 'org_id'
       ],

    ];

    public $rules = [
    ];
}
