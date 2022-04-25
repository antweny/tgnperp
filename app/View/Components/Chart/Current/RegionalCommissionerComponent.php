<?php

namespace App\View\Components\Chart\Current;

use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;
use Illuminate\View\Component;

class RegionalCommissionerComponent extends Component
{
    public $rc;

    //  Create a new component instance.
    public function __construct(CurrentByTitleRepositoryInterface $chart)
    {
        $this->rc = $chart->currentRepresentationByTitle('Regional Commissioner');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chart.current.regional-commissioner-component');
    }
}
