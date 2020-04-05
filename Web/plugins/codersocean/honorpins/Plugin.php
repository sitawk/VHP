<?php namespace Codersocean\Honorpins;

use System\Classes\PluginBase;
use Codersocean\Honorpins\Models\Holder;
use Codersocean\Honorpins\Models\Certificate;
use Codersocean\Honorpins\Models\Organization;
use Codersocean\Honorpins\Models\Pin;
class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        \Codersocean\Honorpins\Components\Dashboard::class  => 'Dashboard',
        \Codersocean\Honorpins\Components\AdminAuth::class  => 'AdminAuth'

          ];
    }

    public function registerSettings()
    {
    }
    public function boot(){
  Certificate::extend(function($model) {
            $model->hasMany['holders'] = ['Codersocean\Honorpins\Models\Holder', 'key' => 'certificate_id'];
        });
  Organization::extend(function($model) {
            $model->hasMany['pins'] = ['Codersocean\Honorpins\Models\Pin', 'key' => 'org_id'];
        });
  Organization::extend(function($model) {
            $model->hasMany['certificates'] = ['Codersocean\Honorpins\Models\Certificate', 'key' => 'org_id'];
        });
      }
}
