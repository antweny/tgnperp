<?php

namespace App\Http\Controllers\Structure;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Structure\GroupRequest;
use App\Models\Group;

class GroupController extends CoreController
{

    // path to index view
    protected $view_index = 'structure.groups.index';

    // path to edit view
    protected $view_edit = 'structure.groups.edit';

    // path to create view
    protected $view_create = 'structure.groups.create';

    // define variable to hold single object
    protected $object = 'group';

    // define variable to hold collection of object
    protected $objects = 'groups';

    // define variable to hold collection of object
    protected $route = 'groups.index';

    //  Controller constructor.
    public function __construct(Group $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(GroupRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(GroupRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
