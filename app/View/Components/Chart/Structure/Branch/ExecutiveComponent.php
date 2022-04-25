<?php

namespace App\View\Components\Chart\Structure\Branch;

use App\Services\ReportChartsServices;
use Illuminate\View\Component;

class ExecutiveComponent extends Component
{

    public $executive;

    //  Create a new component instance.
    public function __construct(ReportChartsServices $reportChartsServices)
    {
        $this->executive = $reportChartsServices->branchRepresentation('Executive');
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.chart.structure.branch.executive-component');
    }
}
