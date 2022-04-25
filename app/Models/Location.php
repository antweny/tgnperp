<?php

namespace App\Models;

class Location extends BaseModel
{
    /* The attributes that are mass assignable */
    protected $fillable = [ 'name', 'descriptions', 'parent_id'];

    //  Model relationships
    public function child()
    {
        return $this->hasMany(Location::class,'parent_id','id');
    }

    //  Model relationships
    public function parent()
    {
        return $this->belongsTo(Location::class,'parent_id','id')->withDefault();
    }


    // Get list of locations
    public function getNameOnly()
    {
        $locations = cache()->remember('locations',30*60,function () {
            return $this->select('id','name')->get();
        });
        return $locations;
    }


}
