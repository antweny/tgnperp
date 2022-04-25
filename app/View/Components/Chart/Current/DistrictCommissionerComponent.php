<?php

namespace App\View\Components\Chart\Current;

use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;
use Illuminate\View\Component;

class DistrictCommissionerComponent extends Component
{
    public $dc;

    //  Create a new component instance.
    public function __construct(CurrentByTitleRepositoryInterface $chart)
    {
        $this->dc = $chart->currentRepresentationByTitle('District Commissioner');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chart.current.district-commissioner-component');
    }
}
