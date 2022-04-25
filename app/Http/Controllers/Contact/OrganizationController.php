<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Contact\OrganizationRequest;
use App\Models\Organization;

class OrganizationController extends CoreController
{
    private $service;

    // path to index view
    protected $view_index = 'contact.organizations.index';

    // path to edit view
    protected $view_edit = 'contact.organizations.edit';

    // path to create view
    protected $view_create = 'contact.organizations.create';

    // define variable to hold single object
    protected $object = 'organization';

    // define variable to hold collection of object
    protected $objects = 'organizations';

    // define variable to hold collection of object
    protected $route = 'organizations.index';

    // Relationship with
    protected $with_relation = ['branch','group','type','location'];

    //  Controller constructor.
    public function __construct(Organization $model)
    {
        parent::__construct($model);
    }

    //  Index Page
    public function index()
    {
        return $this->withRelation();
    }

    // store new resource
    protected function store(OrganizationRequest $request)
    {
        return $this->storing($request->validated());
    }

    // update existing resource
    protected function update(OrganizationRequest $request,$id)
    {
        return $this->updating($request->validated(),$id);
    }



}
