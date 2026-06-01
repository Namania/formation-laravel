<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use InvalidArgumentException;

class Button extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $variant = 'primary',
        public array $colors = [
            'danger' => 'bg-red-100 text-red-800 border-red-300',
            'primary' => 'bg-cyan-100 text-cyan-800 border-cyan-300',
        ],
    ) {
        if (! array_key_exists($this->variant, $colors)) {
            throw new InvalidArgumentException("Type d'alerte invalide : {$this->variant}");
        }

        $this->classes = $this->colors[$this->variant];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
