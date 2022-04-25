<?php

namespace App\Repositories;

use App\Models\Individual;
use App\Models\Position;
use App\Models\Title;
use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;

class CurrentByTitleRepository implements CurrentByTitleRepositoryInterface
{

    protected $title;

    protected $individual;

    protected $position;

    public function __construct(Individual $individual,Position $position)
    {
        $this->title = new Title();
        $this->position = $position;
        $this->individual = $individual;
    }

    //  Create a Dynamic Report Base of title
    public function currentRepresentationByTitle($name)
    {
        $result = $this->individual->selectRaw('individuals.sex,count(*) as count')
            ->join('positions','positions.individual_id','=','individuals.id')
            ->where('positions.title_id',$this->searchByTitleName($name))->where('positions.isActive',true)
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


    // Search Title By Name
    private function searchByTitleName($title)
    {
        $title = $this->title->where('name',$title)->first();

        if(!is_null($title)) {
            return $title->id;
        }
          return null;
    }





}
