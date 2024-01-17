<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menulist extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $route,
        public string $svg_viewbox,
        public string $title,
        public string $g2_transform,
        public string $g4_transform,
        public String $span
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menulist');
    }
}
