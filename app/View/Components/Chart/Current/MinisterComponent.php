<?php

namespace App\View\Components\Chart\Current;

use App\Repositories\Interfaces\CurrentByTitleRepositoryInterface;
use Illuminate\View\Component;

class MinisterComponent extends Component
{
    public $mini;

    //  Create a new component instance.
    public function __construct(CurrentByTitleRepositoryInterface $chart)
    {
        $this->mini = $chart->currentRepresentationByTitle('Minister');
    }

    //Get the view / contents that represent the component.
    public function render()
    {
        return view('components.chart.current.minister-component');
    }
}
