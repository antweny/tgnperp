<?php

namespace App\Services;

class PositionService
{

    public function requestValues($request)
    {
        if(is_null($request['end_date']) && !is_null($request['exit_mode_id'])) {
            $request['end_date'] = date('Y-m-d');
        }
        $request['isActive'] = $this->isActiveStatusBasedOneEndDate($request['end_date']);

        return $request;
    }


    //  Set isActive Status Base on End Date
    private function isActiveStatusBasedOneEndDate($date): bool
    {
        if(!is_null($date)) {
            return 0;
        }
        return 1;
    }




}
