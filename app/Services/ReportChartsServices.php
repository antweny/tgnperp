<?php

namespace App\Services;

use App\Models\Branch;
use App\Models\Individual;
use App\Models\Position;
use App\Models\Title;

class ReportChartsServices
{
    private $title;

    private $individual;

    private $position;

    private $branch;

    public function __construct()
    {
        $this->title = new Title();
        $this->position = new Position();
        $this->individual = new Individual();
        $this->branch = new Branch();
    }


    // Get Report of Women on Government Branches
    public function branchRepresentation($name)
    {

        $result = $this->individual->selectRaw('individuals.sex,count(*) as count')
            ->join('positions','positions.individual_id','=','individuals.id')
            ->join('organizations','organizations.id','=','positions.organization_id')
            ->join('branches','branches.id','=','organizations.branch_id')
            ->where('organizations.branch_id',$this->branch->searchNameGetId($name))
            ->where('positions.isActive',true)
            ->groupBy('individuals.sex')
            ->get();

        $datas = [];

        $total = 0;

        foreach ($result as $item){
            $datas[] = [$item->sex,$item->count];
            $total+=$item->count;
        }

        return array($datas,$total);


    }



}
