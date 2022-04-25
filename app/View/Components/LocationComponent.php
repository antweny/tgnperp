<?php

namespace App\View\Components;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class LocationComponent extends DropdownComponent
{

    public function __construct(Location $model, $value = null, $name = 'location_id', $id = 'locations')
    {
        parent::__construct($model, $value, $name, $id);
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.location-component');
    }
}
