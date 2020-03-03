<?php namespace Codersocean\Honorpins\Models;

use Model;

/**
 * Model
 */
class Organization extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_organizarions';

    /**
     * @var array Validation rules
     */
     public $belongsTo = [
        'user'       => [User::class, 'table' => 'users','key'=> 'user_id'],
        'state' => ['RainLab\Location\Models\State','key'=> 'state_id'],
        'country' => ['RainLab\Location\Models\Country','key'=> 'country_id']
    ];
    public $hasMany = [
        'certificates'=> ['Codersocean\Honorpins\Models\Certificate','key' => 'org_id']
    ];
    public $rules = [
    ];
}
