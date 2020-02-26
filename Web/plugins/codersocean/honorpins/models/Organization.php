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
    public $rules = [
    ];
}
