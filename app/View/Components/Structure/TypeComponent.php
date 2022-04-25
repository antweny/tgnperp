<?php

namespace App\View\Components\Structure;

use App\Models\Type;
use App\View\Components\DropdownComponent;
use function view;

class TypeComponent extends DropdownComponent
{
    public function __construct(Type $model, $value = null, $name = 'type_id', $id = 'types')
    {
        parent::__construct($model, $value, $name, $id);
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.structure.type-component');
    }
}
