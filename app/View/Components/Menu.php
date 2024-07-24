<?php

namespace App\View\Components;

use Closure;
use App\Models\Toko;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class Menu extends Component
{
    public $userData;
    public $toko;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->userData = Auth::user();
        $this->toko = Toko::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu');
    }
}
