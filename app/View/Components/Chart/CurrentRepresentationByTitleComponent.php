<?php

namespace App\View\Components\Chart;

use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;
use Illuminate\View\Component;

class CurrentRepresentationByTitleComponent extends Component
{
    public $name;

    //  Create a new component instance.
    public function __construct(CurrentByTitleRepositoryInterface $chart,$name = '')
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.report.chart.current-representation-by-title-component');
    }
}
