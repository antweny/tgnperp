<?php

namespace App\View\Components\Leadership;

use App\Models\PositionMode;
use App\View\Components\DropdownComponent;
use function view;

class PositionModeComponent extends DropdownComponent
{
    //  Create a new component instance.
    public function __construct(PositionMode $model, $value = null, $name = 'position_mode_id', $id = 'position_modes')
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
        return view('components.leadership.position-mode-component');
    }
}
