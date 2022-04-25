<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\Eloquent\Model;

class CoreController extends Controller
{

    // model variable
    protected $model;

    // path to index view
    protected $view_index;

    // path to create view
    protected $view_create;

    // path to edit view
    protected $view_edit;

    // path to show view
    protected $view_show;

    // path to trash view
    protected $view_trash;

    // define variable to hold single resource
    protected $object;

    // define variable to hold collection resources
    protected $objects;

    // define variable to hold collection resources
    protected $route = null;

    // define variable to hold collection resources
    protected $with_relation = array();

    //  CoreController constructor
    public function __construct(Model $model=null)
    {
        $this->middleware('auth');
        $this->model = $model;
    }

    //  Display a listing of the resource
    protected function index()
    {
        try {
            ${$this->objects} = $this->model->get();  //Get all users
            return view($this->view_index,compact($this->objects));
        }
        catch (Exception $e) {
            return $this->error('Page Not Found');
        }
    }

    //  Display a listing of the resource
    protected function create()
    {
        try {
            ${$this->object} = $this->model;  //Get all users
            return view($this->view_create,compact($this->object));
        }
        catch (Exception $e) {
            return $this->error('Page Not Found');
        }
    }

    //  Store a newly created resource in storage
    protected function storing($request)
    {
        try {
            $this->model->create($request);
            if(is_null($this->route)){
                return $this->success('Successful added');
            }
            return $this->successRoute($this->route,'Added Successfully');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request);
        }
    }

    //  Show the form for editing the specified resource
    protected function show($id)
    {
        try {
            ${$this->object} = $this->model->find($this->decode($id));
            return view($this->view_show,compact($this->object));
        }
        catch (Exception $e) {
            return $this->error('Record Not Found');
        }
    }

    // Show the form for editing the specified resource
    protected function edit($id)
    {
        try {
            ${$this->object} = $this->model->find($this->decode($id));
            return view($this->view_edit,compact($this->object));
        }
        catch (Exception $e) {
            return $this->error('Record Not Found');
        }
    }

    //  Update the specified resource in storage.
    protected function updating($request, $id)
    {
        try {
            $this->model->find($this->decode($id))->update($request);
            return $this->successRoute($this->route,'Updated Successfully');
        }
        catch (Exception $e) {
            return $this->errorWithInput($request);
        }
    }

    // Remove the specified resource from storage.
    protected function destroy($id,$msg = 'Deleted Successfully')
    {
        try {
            $this->model->find($this->decode($id))->delete();
            return $this->success($msg);
        }
        catch (Exception $e) {
            return $this->error('Record not Found');
        }
    }

    //  Display a listing of the resource
    protected function withRelation()
    {
        try {
            ${$this->objects} = $this->model->with($this->with_relation)->get();  //Get all users
            return view($this->view_index,compact($this->objects));
        }
        catch (Exception $e) {
            return $this->error('Page Not Found');
        }
    }

    // Decode the primary key
    protected function decode($id)
    {
        return $this->model->decode($id);
    }



}
