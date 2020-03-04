<?php namespace Codersocean\Honorpins;

use System\Classes\PluginBase;

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
}
