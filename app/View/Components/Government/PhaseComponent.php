<?php

namespace App\View\Components\Government;

use App\Models\Phase;
use App\View\Components\DropdownComponent;
use function view;

class PhaseComponent extends DropdownComponent
{
    //  Create a new component instance.
    public function __construct(Phase $model, $value = null, $name = 'phase_id', $id = 'phases')
    {
        parent::__construct($model, $value, $name, $id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.government.phase-component');
    }
}
