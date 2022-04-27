<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\CoreController;
use App\Http\Requests\HR\DesignationRequest;
use App\Models\Designation;

class DesignationController extends CoreController
{

    // path to index view
    protected $view_index = 'hr.designations.index';

    // path to edit view
    protected $view_edit = 'hr.designations.edit';

    // path to create view
    protected $view_create = 'hr.designations.create';

    // define variable to hold single object
    protected $object = 'designation';

    // define variable to hold collection of object
    protected $objects = 'designations';

    // define variable to hold collection of object
    protected $route = 'designations.index';

    //  Controller constructor.
    public function __construct(Designation $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(DesignationRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(DesignationRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
