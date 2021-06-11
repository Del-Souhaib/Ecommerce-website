<?php

namespace App\View\Components\parts;

use App\Models\Product;
use Illuminate\View\Component;

class client_navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $newproudcts=Product::with('images')->where('statut','Neuf')->limit(4)->get();
        $usedproudcts=Product::with('images')->where('statut','Occaion')->limit(4)->get();
        return view('components.parts.client_navbar',compact(['newproudcts','usedproudcts']));
    }
}
