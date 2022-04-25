<?php

namespace App\Models;

use App\Traits\HashingIds;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Vinkla\Hashids\Facades\Hashids;

class BaseModel extends Model
{
    use HasFactory,HashingIds;

    // Mutator
    protected function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $this->dateToMysqlFormat($value);
    }
    protected function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $this->dateToMysqlFormat($value);
    }


    //======    ACCESSOR    =====//

    //  Format start date
    public function getStartAttribute()
    {
        return $this->mysqlDateToOtherFormat($this->start_date);
    }

    //  Format end date
    public function getEndAttribute()
    {
        return $this->mysqlDateToOtherFormat($this->end_date);
    }

    //  format user active status
    public function getActiveAttribute(): string
    {
        if ($this->isActive) {
            return '<span class="btn btn-success btn-sm">Yes</span>';
        }
        return '<span class="btn btn-danger btn-sm">No</span>';
    }

    //  Get full Name
    public function getFullNameAttribute(): string
    {
        if ($this->acronym) {
            return $this->name.' ('.$this->acronym.')';
        }
        return $this->name;
    }


    // ===== Functions ====== //

    //Get Specific Model ID
    public function searchNameGetId($name)
    {
        $model = $this->where('name',$name)->first();

        if(!is_null($model)) {
            return $model->id;
        }
        return null;
    }

    // Get Collection list of names
    public function getNames()
    {
        return $this->select('id','name')->get();
    }

    // Get Collection list of names and acronyms
    public function getNameAcronym()
    {
        return $this->select('id','name','acronym')->get();
    }

    // Get Collection list of names and mobile
    public function getNameMobile()
    {
        return $this->select('id','name','mobile')->get();
    }

    // Convert mysl date to human readable
    public function mysqlDateToOtherFormat($date)
    {
        if(!is_null($date)) {
            return Carbon::parse($date)->format('d M Y');
        }
    }
    public function dateToMysqlFormat($date)
    {
        if(!is_null($date)) {
            return Carbon::parse($date)->format('Y-m-d');
        }
        return null;
    }
    public function mysqlToDateFormat($date)
    {
        if(!is_null($date)) {
            return Carbon::parse($date)->format('m/d/Y');
        }
    }

    // ============= Local Scopes ============= //

    /* Select name  and id Columns only */
    public function scopeName($query)
    {
        $query->select('id','name');
    }

    public function scopeNameAcronym($query)
    {
        $query->select('id','name','acronym','isActive');
    }


    public function scopeNameMobile($query)
    {
        $query->select('id','name','mobile');
    }

    public function scopeIsActive($query)
    {
        $query->where('isActive',1);
    }


    /*  ======  RELATIONSHIPS BETWEEN MODELS ====== */

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class)->withDefault();
    }
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class)->withDefault();
    }
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class)->withDefault();
    }

}
