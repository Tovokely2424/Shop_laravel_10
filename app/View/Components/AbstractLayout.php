<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class AbstractLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title = '', public ?string $titleLeft = '')
    {
        $this->title = config('app.name') . ($title ? " | $title" : '');
        $this->titleLeft = $titleLeft ? $titleLeft : "Cathegorie";
    }
}
