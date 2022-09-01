<?php
namespace alessioprete\BaseApp\app\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{
    public $categorie;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view(alessioprete_view('frontend.components.sidebar'));
    }
}
