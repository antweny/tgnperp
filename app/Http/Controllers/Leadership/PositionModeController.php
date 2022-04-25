<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Leadership\PositionModeRequest;
use App\Models\PositionMode;

class PositionModeController extends CoreController
{
    // path to index view
    protected $view_index = 'leadership.position-modes.index';

    // path to edit view
    protected $view_edit = 'leadership.position-modes.edit';

    // path to create view
    protected $view_create = 'leadership.position-modes.create';

    // define variable to hold single object
    protected $object = 'positionMode';

    // define variable to hold collection of object
    protected $objects = 'positionModes';

    // define variable to hold collection of object
    protected $route = 'positionModes.index';

    //  Controller constructor.
    public function __construct(PositionMode $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(PositionModeRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(PositionModeRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
