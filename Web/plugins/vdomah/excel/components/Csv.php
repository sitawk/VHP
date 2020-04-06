<?php namespace Vdomah\Excel\Components;

use Flash;

use Input;
use Redirect;
use Request;
use Session;
use Storage;
use RainLab\User\Models\User;

use Cms\Classes\ComponentBase;
use RainLab\User\Facades\Auth;
use Vdomah\Excel\Classes\Excel;


use October\Rain\Database\Attach\File;
use Codersocean\Honorpins\Models\Categories;
use Codersocean\Honorpins\Models\Certificate;
use Codersocean\Honorpins\Models\Holder;
use Codersocean\Honorpins\Models\HolderPins;
use Codersocean\Honorpins\Models\Organization;
use Codersocean\Honorpins\Models\Pin;
use Codersocean\Honorpins\Models\Cart;

class Csv extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Csv Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
        // $this->page['allclinics'] = $allclinics = Clinic::all();


    }
  

}
