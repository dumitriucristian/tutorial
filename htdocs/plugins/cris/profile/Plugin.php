<?php namespace Cris\Profile;

use Event;
use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

   public function boot()
    {
        // Extend all backend form usage
        Event::listen('backend.form.extendFields', function($widget) {

            // Only for the User controller
            if (!$widget->getController() instanceof \RainLab\User\Controllers\Users) {
                return;
            }

            // Only for the User model
            if (!$widget->model instanceof \RainLab\User\Models\User) {
                return;
            }

            // Add an extra birthday field
            $widget->addTabFields([
                'facebook' => [
                    'label'   => 'Facebook',
                    'comment' => 'Add your facebook profile',
                    'type'    => 'text',
                    'tab'    => 'Profile'
                ],

                'bio' => [
                    'label'   => 'bio',
                    'comment' => 'Add your biography',
                    'type'    => 'text',
                    'tab'    => 'Biograph'
                ]
            ]);

        });
    }

/*
    public function boot(){

        UsersController::extendFormFields(function($form, $model, $context){
           $form->addTabFields([
                'facebook' => [
                    'label' => 'facebook',
                    'type' => 'text',
                    'tab' => 'Profile'
                ],

                'bio' => [
                    'label' => 'Biography',
                    'type' => 'text',
                    'tab' => 'Profile'
                ]

            ]);
        });

    }
*/

}
