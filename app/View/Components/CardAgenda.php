<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardAgenda extends Component
{
    public $title;
    public $icon;
    public $date;
    public $timeStart;
    public $timeEnd;
    public $location;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $icon, string $date, string $timeStart, string $timeEnd, string $location)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->date = $date;
        $this->timeStart = $timeStart;
        $this->timeEnd = $timeEnd;
        $this->location = $location;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-agenda');
    }
}
