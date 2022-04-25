<?php

namespace App\Models;


class Phase extends BaseModel
{

    /* The attributes that are mass assignable */
    protected $fillable = [ 'name','start_date','end_date', 'descriptions'];

    // Get Collection list of names
    public function getNames()
    {
        return $this->select('id','name')->orderBy('name','desc')->get();
    }
}
