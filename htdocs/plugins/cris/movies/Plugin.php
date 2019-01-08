<?php namespace Cris\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerFormWidgets()
    {
        return [
            'Cris\Movies\FormWidgets\Actorbox' => [
                'label' => 'Actorbox field',
                'code'  => 'actorbox'
            ]
        ];
    }
}
