<?php

namespace App\View\Components\Contact;

use App\Models\Organization;
use App\View\Components\DropdownComponent;
use function view;

class OrganizationComponent extends DropdownComponent
{
    //  Create a new component instance.
    public function __construct(Organization $model, $value = null, $name = 'organization_id', $id = 'organizations')
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
        return view('components.contact.organization-component');
    }
}
