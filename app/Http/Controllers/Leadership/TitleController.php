<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Leadership\TitleRequest;
use App\Models\Title;

class TitleController extends CoreController
{
    // path to index view
    protected $view_index = 'leadership.titles.index';

    // path to edit view
    protected $view_edit = 'leadership.titles.edit';

    // path to create view
    protected $view_create = 'leadership.titles.create';

    // define variable to hold single object
    protected $object = 'title';

    // define variable to hold collection of object
    protected $objects = 'titles';

    // define variable to hold collection of object
    protected $route = 'titles.index';

    //  Controller constructor.
    public function __construct(Title $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(TitleRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(TitleRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
