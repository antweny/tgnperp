<?php

namespace App\View\Components\Leadership;

use App\Models\Title;
use App\View\Components\DropdownComponent;
use function view;

class TitleComponent extends DropdownComponent
{
    //  Create a new component instance.
    public function __construct(Title $model, $value = null, $name = 'title_id', $id = 'titles')
    {
        parent::__construct($model, $value, $name, $id);
        $this->lists = $model->getNameAcronym();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.leadership.title-component');
    }
}
