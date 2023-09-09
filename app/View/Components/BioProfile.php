<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BioProfile extends Component
{
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $birthday = \Carbon\Carbon::createMidnightDate(1997, 6, 13, 'America/Sao_Paulo');

        return view('components.bio-profile', ['year' => $birthday->diffInYears(now())]);
    }
}
