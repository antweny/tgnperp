<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Government\TermRequest;
use App\Models\Term;

class TermController extends CoreController
{

    // path to index view
    protected $view_index = 'government.terms.index';

    // path to edit view
    protected $view_edit = 'government.terms.edit';

    // path to create view
    protected $view_create = 'government.terms.create';

    // define variable to hold single object
    protected $object = 'term';

    // define variable to hold collection of object
    protected $objects = 'terms';

    // define variable to hold collection of object
    protected $route = 'terms.index';

    //  Controller constructor.
    public function __construct(Term $model)
    {
        parent::__construct($model);
    }

    // store new resource
    protected function store(TermRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(TermRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

}
