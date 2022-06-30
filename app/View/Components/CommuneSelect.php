<?php

namespace App\View\Components;

use App\Models\Commune;
use Illuminate\View\Component;

class CommuneSelect extends Component
{
    public $name ;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $communes = Commune::with('wilaya')->get();
        return view('components.commune-select' , ['communes' => $communes]);
    }
}
