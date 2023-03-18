<?php

namespace App\View\Components;

use App\Models\Hardskill;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyHardSkills extends Component
{
    public function __construct()
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $hardskills = Hardskill::with(['file'])->get();
        return view('components.my-hard-skills', [
            'hardskills' => $hardskills
        ]);
    }
}
