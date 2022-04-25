<?php

namespace App\View\Components\Chart\Current;

use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;
use Illuminate\View\Component;

class RegionalAdministrativeSecretaryComponent extends Component
{
    public $ras;

    //  Create a new component instance.
    public function __construct(CurrentByTitleRepositoryInterface $chart)
    {
        $this->ras = $chart->currentRepresentationByTitle('Regional Administrative Secretary');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chart.current.regional-administrative-secretary-component');
    }
}
