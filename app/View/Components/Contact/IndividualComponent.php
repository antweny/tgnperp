<?php

namespace App\View\Components\Contact;

use App\Models\Individual;
use App\View\Components\DropdownComponent;
use function view;

class IndividualComponent extends DropdownComponent
{
    //  Create a new component instance.
   public function __construct(Individual $model, $value = null, $name = 'individual_id', $id = 'individuals')
   {
       parent::__construct($model, $value, $name, $id);
       $this->lists = $model->getNameMobile();
   }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact.individual-component');
    }
}
