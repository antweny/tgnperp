<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\CoreController;
use App\Http\Requests\HR\EmploymentContractRequest;
use App\Models\EmploymentContract;

class EmploymentContractController extends CoreController
{

    // path to index view
    protected $view_index = 'hr.employments.contracts.index';

    // path to edit view
    protected $view_edit = 'hr.employments.contracts.edit';

    // path to create view
    protected $view_create = 'hr.employmentContracts.create';

    // define variable to hold single object
    protected $object = 'employmentContract';

    // define variable to hold collection of object
    protected $objects = 'employmentContracts';

    // define variable to hold collection of object
    protected $route = 'employmentContracts.index';

    //  Controller constructor.
    public function __construct(EmploymentContract $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(EmploymentContractRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(EmploymentContractRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
