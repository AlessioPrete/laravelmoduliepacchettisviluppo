<?php

namespace alessioprete\BaseApp\app\View\Components\Forms;

use Illuminate\View\Component;

class input extends Component
{
    public $id;
    public $label;
    public $field;
    public $type;
    public $value;
    public $ph;

    /**
     * Create a new component instance.
     *
     * @param $label
     * @param $field
     */
    public function __construct($label, $field, $type = 'text', $value = '', $ph = '...', $id = '')
    {
        $this->id = $id;
        $this->label = $label;
        $this->field = $field;
        $this->type = $type;
        $this->value = $value;
        $this->ph = $ph;
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
