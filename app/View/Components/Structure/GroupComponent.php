<?php

namespace App\View\Components\Structure;

use App\Models\Group;
use App\View\Components\DropdownComponent;
use function view;

class GroupComponent extends DropdownComponent
{
    /* Create a new component instance. */
    public function __construct(Group $model, $value = null, $name = 'group_id', $id = 'groups')
    {
        parent::__construct($model, $value, $name, $id);
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.structure.group-component');
    }
}
