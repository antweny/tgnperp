<?php

namespace App\Http\Controllers\Leadership;

use App\Http\Controllers\CoreController;
use App\Http\Requests\Leadership\PositionRequest;
use App\Models\Position;
use App\Services\PositionService;

class PositionController extends CoreController
{
    private $service;

    // path to index view
    protected $view_index = 'leadership.positions.index';

    // path to edit view
    protected $view_edit = 'leadership.positions.edit';

    // path to create view
    protected $view_create = 'leadership.positions.create';

    // define variable to hold single object
    protected $object = 'position';

    // define variable to hold collection of object
    protected $objects = 'positions';

    // define variable to hold collection of object
    protected $route = 'positions.index';

    protected $with_relation = ['individual','title','position_mode','organization','phase','term','exit_mode'];

    //  Controller constructor.
    public function __construct(Position $model, PositionService $positionService)
    {
        parent::__construct($model);
        $this->service = $positionService;
    }


    protected function index()
    {
        return $this->withRelation();
    }

    // store new resource
    protected function store(PositionRequest $request)
    {
        $request = $this->service->requestValues($request->validated());
        return $this->storing($request);
    }

    // update existing resource
    protected function update(PositionRequest $request,$id)
    {
        $request = $this->service->requestValues($request->validated());
        return $this->updating($request,$id);
    }

    //  Display a listing of the resource
    protected function withRelation()
    {
        try {
            ${$this->objects} = $this->model->with($this->with_relation)->orderBy('created_at','desc')->get();  //Get all users
            return view($this->view_index,compact($this->objects));
        }
        catch (\Exception $e) {
            return $this->error('Page Not Found');
        }
    }

}
