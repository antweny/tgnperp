<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Title extends BaseModel
{
    /* The attributes that are mass assignable */
    protected $fillable = [ 'name','acronym','descriptions'];
}
