<?php namespace Codersocean\Honorpins;

use System\Classes\PluginBase;
use Codersocean\Honorpins\Models\Holder;
use Codersocean\Honorpins\Models\Certificate;
use Codersocean\Honorpins\Models\Order;
use Codersocean\Honorpins\Models\OrderDetail;
use Codersocean\Honorpins\Models\Organization;
use Codersocean\Honorpins\Models\Pin;
use RainLab\User\Models\User;
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
            $model->hasMany['holders'] = ['Codersocean\Honorpins\Models\HolderPins', 'key' => 'org_id'];
        });
  Organization::extend(function($model) {
            $model->hasMany['orders'] = ['Codersocean\Honorpins\Models\Order', 'key' => 'org_id'];
        });
  Order::extend(function($model) {
            $model->hasMany['detail'] = ['Codersocean\Honorpins\Models\OrderDetail', 'key' => 'order_id'];
        });
  User::extend(function($model) {
            $model->hasOne['myorganization'] = ['Codersocean\Honorpins\Models\Organization', 'key' => 'user_id'];
        });
  User::extend(function($model) {
            $model->hasMany['cards'] = ['Codersocean\Honorpins\Models\PaymentMethod', 'key' => 'user_id'];
        });
  User::extend(function($model) {
            $model->hasMany['emails'] = ['Codersocean\Honorpins\Models\ConnectedEmails', 'key' => 'user_id'];
        });
  User::extend(function($model) {
            $model->hasMany['personalcertificates'] = ['Codersocean\Honorpins\Models\HolderPins', 'key' => 'email', 'otherKey' => 'email'];
        });
  User::extend(function($model) {
            $model->hasMany['personalpins'] = ['Codersocean\Honorpins\Models\HolderPins',  'key' => 'email', 'otherKey' => 'email'];
        });
  Organization::extend(function($model) {
            $model->hasMany['pins'] = ['Codersocean\Honorpins\Models\Pin', 'key' => 'org_id'];
        });
  Organization::extend(function($model) {
            $model->hasMany['certificates'] = ['Codersocean\Honorpins\Models\Certificate', 'key' => 'org_id'];
        });
      }
}
