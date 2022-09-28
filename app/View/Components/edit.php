<?php

namespace App\View\Components;

use Illuminate\View\Component;

class edit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $action;
    public $nome;
    public $descricao;
    public $descForm;

    public function __construct($action, $nome, $descricao, $descForm)
    {
        $this->action = $action;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->descForm = $descForm;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit');
    }
}
