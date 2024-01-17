<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use App\View\Components\AbstractLayout;

class DefaultLayout extends AbstractLayout
{
   

    public function __construct(
        public string $title = '',
    )
    {
        parent::__construct($title);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
