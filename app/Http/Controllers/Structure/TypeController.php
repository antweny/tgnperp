<?php

namespace App\Http\Controllers\Structure;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Structure\TypeRequest;
use App\Models\Type;

class TypeController extends CoreController
{

    // path to index view
    protected $view_index = 'structure.types.index';

    // path to edit view
    protected $view_edit = 'structure.types.edit';

    // path to create view
    protected $view_create = 'structure.types.create';

    // define variable to hold single object
    protected $object = 'type';

    // define variable to hold collection of object
    protected $objects = 'types';

    // define variable to hold collection of object
    protected $route = 'types.index';

    //  Controller constructor.
    public function __construct(Type $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(TypeRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(TypeRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
