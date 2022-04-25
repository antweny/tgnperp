<?php

namespace App\Services;

use App\Models\Position;
use Illuminate\Database\Eloquent\Collection;

class SearchService
{

    private $positions;

    private $title = array();

    private $org = array();

    private $duration = array();


    public function __construct()
    {
        $this->positions = new Position();
    }


    public function searchRequest($request)
    {

        return $this->positions->with(['individual','title','position_mode','organization.branch','phase','term','exit_mode'])
            ->where('organization_id',$request['organization_id'])
            ->orWhere('title_id',$request['title_id'])
            ->orWhereBetween('start_date',[$this->positions->dateToMysqlFormat($request['start_date']),$this->positions->dateToMysqlFormat($request['end_date'])])
            ->orderBy('created_at','desc')
            ->get();  //Get all users

    }






}
