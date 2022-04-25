<?php

namespace App\Http\Controllers\Structure;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Structure\BranchRequest;
use App\Models\Branch;

class BranchController extends CoreController
{

    // path to index view
    protected $view_index = 'structure.branches.index';

    // path to edit view
    protected $view_edit = 'structure.branches.edit';

    // path to create view
    protected $view_create = 'structure.branches.create';

    // define variable to hold single object
    protected $object = 'branch';

    // define variable to hold collection of object
    protected $objects = 'branches';

    // define variable to hold collection of object
    protected $route = 'branches.index';

    //  Controller constructor.
    public function __construct(Branch $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(BranchRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(BranchRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
