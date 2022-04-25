<?php

namespace App\View\Components\Chart\Current;

use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;
use Illuminate\View\Component;

class DeputyPermanentSecretaryComponent extends Component
{
    public $depps;

    //  Create a new component instance.
    public function __construct(CurrentByTitleRepositoryInterface $chart)
    {
        $this->depps= $chart->currentRepresentationByTitle('Deputy Permanent Secretary');
    }

    //  Get the view / contents that represent the component.
    public function render()
    {
        return view('components.chart.current.deputy-permanent-secretary-component');
    }


}
