<?php

namespace App\View\Components\Chart\Structure\Branch;

use App\Services\ReportChartsServices;
use Illuminate\View\Component;

class LegislativeComponent extends Component
{
    public $legislative;

    //  Create a new component instance.
    public function __construct(ReportChartsServices $reportChartsServices)
    {
        $this->legislative = $reportChartsServices->branchRepresentation('Legislative');
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.chart.structure.branch.legislative-component');
    }
}
