<?php

namespace App\Models;

class Organization extends BaseModel
{

    /* The attributes that are mass assignable */
    protected $fillable = [ 'name','acronym','tier','branch_id','type_id','group_id','location_id',
                            'address','mobile','email'];



    // ===== Relationships with Others
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }


}
