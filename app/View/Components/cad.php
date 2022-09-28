<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cad extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $action;
    // public $nome;
    public $descForm;

    public function __construct($action,$descForm)
    {
        $this->action = $action;
        $this->descForm = $descForm;
        // $this->nome = old($nome);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cad');
    }
}
