<?php

namespace alessioprete\BaseApp\app\View\Components\Forms;

use Illuminate\View\Component;

class input extends Component
{
    public $label;
    public $field;

    /**
     * Create a new component instance.
     *
     * @param $label
     * @param $field
     */
    public function __construct($label, $field)
    {
        $this->label = $label;
        $this->field = $field;
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
