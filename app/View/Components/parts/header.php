<?php

namespace App\View\Components\parts;

use Illuminate\View\Component;

class header extends Component
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
        $categories=\App\Models\Category::with('child_categories')->get()->all();

        return view('components.parts.header',compact('categories'));
    }
}
