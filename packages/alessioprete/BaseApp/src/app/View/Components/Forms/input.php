<?php

namespace alessioprete\BaseApp\app\View\Components\Forms;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view(alessioprete_view('components.forms.input'));
    }
}
