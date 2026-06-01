<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use InvalidArgumentException;

class Alert extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'success',
        public bool $dismissible = false,
        private array $colors = [
            'success' => 'bg-green-100 text-green-800 border-green-300',
            'error' => 'bg-red-100 text-red-800 border-red-300',
            'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-300',
        ],
    )
    {
        if (! array_key_exists($this->type, $this->colors)) {
            throw new InvalidArgumentException("Type d'alerte invalide : {$this->type}");
        }

        $this->classes = $this->colors[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
