<?php namespace Codersocean\Honorpins\Models;

use Model;
use RainLab\User\Models\User;
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
        'states' => ['RainLab\Location\Models\State','key'=> 'state_id'],
        'countries' => ['RainLab\Location\Models\Country','key'=> 'country_id']
    ];
    public $hasMany = [
        'certificates'=> ['Codersocean\Honorpins\Models\Certificate','key' => 'org_id'],
          'pins'=> ['Codersocean\Honorpins\Models\Pin','key' => 'org_id']
    ];

    public $rules = [
    ];
}
