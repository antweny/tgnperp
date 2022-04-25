<?php

namespace App\View\Components\Government;

use App\Models\Term;
use App\View\Components\DropdownComponent;
use function view;

class TermComponent extends DropdownComponent
{
    //  Create a new component instance.
    public function __construct(Term $model, $value = null, $name = 'term_id', $id = 'terms')
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
        return view('components.government.term-component');
    }
}
