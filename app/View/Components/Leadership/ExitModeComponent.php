<?php

namespace App\View\Components\Leadership;

use App\Models\ExitMode;
use App\View\Components\DropdownComponent;
use function view;

class ExitModeComponent extends DropdownComponent
{
    //Create a new component instance.
    public function __construct(ExitMode $model, $value = null, $name = 'exit_mode_id', $id = 'exit_modes')
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
        return view('components.leadership.exit-mode-component');
    }
}
