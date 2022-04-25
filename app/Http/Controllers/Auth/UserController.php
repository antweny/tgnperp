<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Auth\UserRequest;
use App\Models\User;
use App\Services\Auth\UserService;
use Exception;

class UserController extends CoreController
{
    //
    private $service;

    // path to index view
    protected $view_index = 'auth.users.index';

    // path to edit view
    protected $view_edit = 'auth.users.edit';

    // path to create view
    protected $view_create = 'auth.users.create';

    // define variable to hold single object
    protected $object = 'user';

    // define variable to hold collection of object
    protected $objects = 'users';

    // define variable to hold collection of object
    protected $route = 'users.index';

    protected $with_relation = ['role'];

    //  Controller constructor.
    public function __construct(User $model, UserService $userService)
    {
        parent::__construct($model);
        $this->service = $userService;
    }

    protected function index()
    {
       return $this->withRelation();
    }

    // store new resource
    protected function store(UserRequest $request)
    {
        try {
            $this->service->store($this->model,$request->validated());
            return $this->successRoute($this->route,'Added Successfully');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request->validated());
        }
    }

    // update existing resource
    protected function update(UserRequest $request,$id)
    {
        try {
            $this->service->update($this->model->find($this->decode($id)),$request->validated());
            return $this->successRoute($this->route,'Updated Successfully');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request->validated());
        }
    }



}
