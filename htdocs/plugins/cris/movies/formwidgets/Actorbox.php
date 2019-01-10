<?php namespace Cris\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Cris\Movies\Models\Actor;

class Actorbox extends FormWidgetBase{



    public function widgetDetails()
    {
            return [
              'name' => 'Actorbox',
              'description' => 'Field for Adding actors'
            ];
    }

    public function render(){


        $this->prepareVars();
        return $this->makePartial('widget');

    }

    public function loadAssets()
    {
       $this->addCss('css/actorbox.css');
    }

    public function prepareVars(){
        $this->vars['id'] = $this->model->id;
        $this->vars['actors'] =  Actor::all()->lists('first_name','id');
        $this->vars['name'] = $this->formField->getName().'[]';
        $this->vars['selectedValue'] = $this->getLoadValue();
    }

}
