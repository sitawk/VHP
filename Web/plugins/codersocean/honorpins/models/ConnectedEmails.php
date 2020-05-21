<?php namespace Codersocean\Honorpins\Models;

use Model;
use RainLab\User\Models\User;
/**
 * Model
 */
class ConnectedEmails extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codersocean_honorpins_emails_connected';

    /**
     * @var array Validation rules
     */
     public $belongsTo = [
        'user'       => [User::class, 'table' => 'users','key'=> 'user_id'],

    ];
    public $rules = [
    ];
}
