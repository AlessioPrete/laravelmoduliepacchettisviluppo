<?php

namespace alessioprete\BaseApp\app\View\Components\Forms;

use Illuminate\View\Component;

class checkbox extends Component
{
    public $label;
    public $check;
    public $name;

    /**
     * Create a new component instance.
     *
     * @param $label
     * @param $field
     */
    public function __construct($label, $check = null, $name = null)
    {
        $this->label = $label;
        $this->check = $check;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view(alessioprete_view('components.forms.checkbox'));
    }
}
