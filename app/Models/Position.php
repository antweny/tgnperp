<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends BaseModel
{

    //  The attributes that are mass assignable
    protected $fillable = [ 'individual_id', 'title_id','position_mode_id','organization_id'
                            ,'phase_id','term_id','start_date','end_date','exit_mode_id','isActive','descriptions'];


    /*  ======  RELATIONSHIPS BETWEEN MODELS ====== */

    public function individual(): BelongsTo
    {
        return $this->belongsTo(Individual::class)->withDefault();
    }

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class)->withDefault();
    }

    public function position_mode(): BelongsTo
    {
        return $this->belongsTo(PositionMode::class)->withDefault();
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class)->withDefault();
    }

    public function phase(): BelongsTo
    {
        return $this->belongsTo(Phase::class)->withDefault();
    }

    public function term(): BelongsTo
    {
        return $this->belongsTo(Term::class)->withDefault();
    }

    public function exit_mode(): BelongsTo
    {
        return $this->belongsTo(ExitMode::class)->withDefault();
    }

}
