<?php namespace Vdomah\Excel;

use System\Classes\PluginBase;
use App;
use Illuminate\Foundation\AliasLoader;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Vdomah\Excel\Components\Csv'     => 'Csv'
        ];
    }

    public function registerSettings()
    {
    }
}
