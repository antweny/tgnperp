<?php

namespace App\Traits;

use Vinkla\Hashids\Facades\Hashids;

trait HashingIds
{

    public function getRouteKey()
    {
        return Hashids::encode($this->getKey(),2022,04,15,15);
    }

    // Decode the primary key
    public function decode($id)
    {
        try {
            return Hashids::decode($id)[0];
        }
        catch (\Exception $e) {
            return $id;
        }
    }

}
