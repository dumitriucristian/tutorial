<?php namespace Cris\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;


class Actorbox extends FormWidgetBase{



    public function widgetDetails()
    {
            return [
              'name' => 'Actorbox',
              'description' => 'Field for Adding actors'
            ];
    }

    public function render(){

        return $this->makePartial('widget');

    }


}
