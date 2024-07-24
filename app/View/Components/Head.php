<?php

namespace App\View\Components;

use Closure;
use App\Models\Toko;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Head extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $toko;

    public function __construct($title)
    {
        $this->title = $title;
        $this->toko = Toko::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}
