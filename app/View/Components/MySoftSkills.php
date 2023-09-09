<?php

namespace App\View\Components;

use App\Models\Softskill;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MySoftSkills extends Component
{
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $softskills = Softskill::all();

        return view('components.my-soft-skills', [
            'softskills' => $softskills,
        ]);
    }
}
