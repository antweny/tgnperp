<?php

namespace App\View\Components\Structure;

use App\Models\Branch;
use App\View\Components\DropdownComponent;
use function view;

class BranchComponent extends DropdownComponent
{

    public function __construct(Branch $model, $value = null, $name = 'branch_id', $id = 'branches')
    {
        parent::__construct($model, $value, $name, $id);
    }


    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.structure.branch-component');
    }
}
