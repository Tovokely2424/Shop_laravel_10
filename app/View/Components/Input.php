<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label,
        public ?string $value = null,
        public ?string $id = null,
        public string $type = 'text',
        public string $help = '',
        public ?string $placeholder = null,
        public ?string $arial_label = null,
        public ?string $aria_describedby = null
    )
    {
        $this -> id ??= $this->name; //si id=null , il prendra name
        $this -> placeholder ??=$this->name;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
