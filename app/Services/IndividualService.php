<?php

namespace App\Services;

use App\Models\Individual;

class IndividualService
{
    private $model;

    public function __construct(Individual $individual)
    {
        $this->model = $individual;
    }

    /* Create new resource */
    public function activation($string,$id) : void
    {
        $individual = $this->model->find($id);
        if( $string == 'activate') {
            $individual->isActive = 1;
        }
        else {
            $individual->isActive = 0;
        }
        $individual->update();
    }

}
