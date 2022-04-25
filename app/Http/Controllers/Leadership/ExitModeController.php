<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Leadership\ExitModeRequest;
use App\Models\ExitMode;

class ExitModeController extends CoreController
{
    // path to index view
    protected $view_index = 'leadership.exit-modes.index';

    // path to edit view
    protected $view_edit = 'leadership.exit-modes.edit';

    // path to create view
    protected $view_create = 'leadership.exit-modes.create';

    // define variable to hold single object
    protected $object = 'exitMode';

    // define variable to hold collection of object
    protected $objects = 'exitModes';

    // define variable to hold collection of object
    protected $route = 'exitModes.index';

    //  Controller constructor.
    public function __construct(ExitMode $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(ExitModeRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(ExitModeRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
