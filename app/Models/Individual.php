<?php

namespace App\Models;

class Individual extends BaseModel
{

    /* The attributes that are mass assignable */
    protected $fillable = [ 'name', 'sex','address','mobile','email','isActive'];

    //  Get full Name
    public function getFullNameAttribute(): string
    {
        if ($this->mobile) {
            return $this->name.' ('.$this->mobile.')';
        }
        return $this->name;
    }

    /* format name before saved */
    protected function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }


}
