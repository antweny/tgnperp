<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\CoreController;
use App\Http\Requests\HR\DepartmentRequest;
use App\Models\Department;

class DepartmentController extends CoreController
{

    // path to index view
    protected $view_index = 'hr.departments.index';

    // path to edit view
    protected $view_edit = 'hr.departments.edit';

    // path to create view
    protected $view_create = 'hr.departments.create';

    // define variable to hold single object
    protected $object = 'department';

    // define variable to hold collection of object
    protected $objects = 'departments';

    // define variable to hold collection of object
    protected $route = 'departments.index';

    //  Controller constructor.
    public function __construct(Department $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(DepartmentRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(DepartmentRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
