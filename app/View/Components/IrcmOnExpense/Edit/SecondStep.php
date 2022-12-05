<?php

namespace App\View\Components\IrcmOnExpense\Edit;

use Illuminate\View\Component;

class SecondStep extends Component
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
        return view('components.ircm-on-expense.edit.second-step');
    }
}
