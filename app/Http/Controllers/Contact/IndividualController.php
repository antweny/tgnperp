<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Contact\IndividualRequest;
use App\Models\Individual;
use App\Services\IndividualService;

class IndividualController extends CoreController
{
    private $service;

    // path to index view
    protected $view_index = 'contact.individuals.index';

    // path to edit view
    protected $view_edit = 'contact.individuals.edit';

    // path to create view
    protected $view_create = 'contact.individuals.create';

    // define variable to hold single object
    protected $object = 'individual';

    // define variable to hold collection of object
    protected $objects = 'individuals';

    // define variable to hold collection of object
    protected $route = 'individuals.index';

    //  Controller constructor.
    public function __construct(Individual $model, IndividualService $individualService)
    {
        parent::__construct($model);
        $this->service = $individualService;
    }

    // store new resource
    protected function store(IndividualRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(IndividualRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }

    // Manage Active/Inactive
    public function activate($string,$id)
    {
        try {
            $this->service->activation($string,$this->decode($id));
            return $this->successRoute($this->route,ucwords($string).' successfully');
        }
        catch (\Exception $e) {
            return $this->error();
        }
    }

}
