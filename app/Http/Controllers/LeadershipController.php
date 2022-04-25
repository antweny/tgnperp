<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Services\PositionService;
use App\Services\SearchService;
use Illuminate\Support\Facades\Request;

class LeadershipController extends Controller
{
    private $model;

    // path to index view
    protected $view_index = 'leadership';

    // define variable to hold single object
    protected $object = 'position';

    // define variable to hold collection of object
    protected $objects = 'positions';

    protected $with_relation = ['individual','title','position_mode','organization.branch','phase','term','exit_mode'];

    //  Controller constructor.
    public function __construct(Position $model)
    {
        $this->model = $model;
    }

    protected function index()
    {
       return $this->withRelation();
    }

    //  Display a listing of the resource
    protected function withRelation()
    {
        try {
            ${$this->objects} = $this->model->with($this->with_relation)
                ->orderBy('created_at','desc')->where('isActive',true)
                ->get();  //Get all users
            return view($this->view_index,compact($this->objects));
        }
        catch (\Exception $e) {
            return $this->error('Page Not Found');
        }
    }

    //  Display a listing of the resource
    public function search()
    {
        $searchService = new SearchService;

        $request = Request::except(['_token','_method']);

        if(is_null($request['organization_id']) && is_null($request['title_id']) && is_null($request['start_date']) && is_null($request['end_date'])){
            return $this->index();
        }
        else {
            ${$this->objects} = $searchService->searchRequest($request);

            session()->flashInput($request);

            return view($this->view_index,compact($this->objects));
        }

    }

}
