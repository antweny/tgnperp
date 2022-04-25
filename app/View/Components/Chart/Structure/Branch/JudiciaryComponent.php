<?php

namespace App\View\Components\Chart\Structure\Branch;

use App\Services\ReportChartsServices;
use Illuminate\View\Component;

class JudiciaryComponent extends Component
{
    public $judiciary;

    //  Create a new component instance.
    public function __construct(ReportChartsServices $reportChartsServices)
    {
        $this->judiciary = $reportChartsServices->branchRepresentation('Judiciary');
    }

    //Get the view / contents that represent the component.
    public function render()
    {
        return view('components.chart.structure.branch.judiciary-component');
    }
}
