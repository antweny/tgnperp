<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExitMode extends BaseModel
{
    /* The attributes that are mass assignable */
    protected $fillable = [ 'name','descriptions'];
}
