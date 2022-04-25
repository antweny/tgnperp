<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Government\PhaseRequest;
use App\Models\Phase;

class PhaseController extends CoreController
{
    //
    private $service;

    // path to index view
    protected $view_index = 'government.phases.index';

    // path to edit view
    protected $view_edit = 'government.phases.edit';

    // path to create view
    protected $view_create = 'government.phases.create';

    // define variable to hold single object
    protected $object = 'phase';

    // define variable to hold collection of object
    protected $objects = 'phases';

    // define variable to hold collection of object
    protected $route = 'phases.index';

    //  Controller constructor.
    public function __construct(Phase $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(PhaseRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(PhaseRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
