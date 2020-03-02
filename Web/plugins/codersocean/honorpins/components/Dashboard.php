<?php namespace Codersocean\Honorpins\Components;

use Cms\Classes\ComponentBase;
use Codersocean\Honorpins\Models\Categories;
use Codersocean\Honorpins\Models\Certificate;
use Codersocean\Honorpins\Models\Holder;
use Codersocean\Honorpins\Models\HolderPins;
use Codersocean\Honorpins\Models\Organization;
use Codersocean\Honorpins\Models\Pin;
class Dashboard extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Dashboard Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onAddCertificate(){
      $addcertificate = new Certificate;
      $addcertificate->url = post('url');
      $addcertificate->title = post('title');
      $addcertificate->category_id = post('category');
      $addcertificate->desc = post('desc');
      $addcertificate->org_id = post('org_id');
      $addcertificate->save();
      $this->page['addcertificate'] = 1;
      $this->page['thisorganization'] = Organization::where('id',post('org_id'))->first();
      return [
          '#completecertificate' => $this->renderPartial('profile/addcertificate')
      ];


    }
    public function defineProperties()
    {
        return [];
    }
}
