<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;

class LocationController extends CoreController
{
    //
    private $service;

    // path to index view
    protected $view_index = 'locations.index';

    // path to edit view
    protected $view_edit = 'locations.edit';

    // path to create view
    protected $view_create = 'locations.create';

    // define variable to hold single object
    protected $object = 'location';

    // define variable to hold collection of object
    protected $objects = 'locations';

    // define variable to hold collection of object
    protected $route = 'locations.index';

    protected $with_relation=['parent'];

    //  Controller constructor.
    public function __construct(Location $model)
    {
        parent::__construct($model);
    }

    protected function index()
    {
        return $this->withRelation();
    }

    // store new resource
    protected function store(LocationRequest $request)
    {
       return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(LocationRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }
}
