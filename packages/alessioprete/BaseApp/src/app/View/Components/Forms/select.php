<?php

namespace alessioprete\BaseApp\app\View\Components\Forms;

use Illuminate\View\Component;
use function view;

class select extends Component
{
    public $label;
    public $field;
    public $item;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $item, $field)
    {
        $this->label = $label;
        $this->item = $item;
        $this->field = $field;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view(alessioprete_view('components.forms.select'));
    }
}
