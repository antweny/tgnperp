<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class DropdownComponent extends Component
{
    public $name;
    public $value;
    public $id;
    public $lists;

    /* Create a new component instance. */
    public function __construct(Model $model, $value = null, $name = 'model_id', $id='models')
    {
        $this->name = $name;
        $this->value = $value;
        $this->id = $id;
        $this->lists = $model->getNames();
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.dropdown-component');
    }
}
