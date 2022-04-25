<?php

namespace App\Models;

class Branch extends BaseModel
{
    /* The attributes that are mass assignable */
    protected $fillable = [ 'name','descriptions','entity'];
}
