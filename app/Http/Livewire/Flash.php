<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    public $message;
    public $type;
    protected $listeners = ['flash' => 'setFlashMessage'];

    public function setFlashMessage($message,$type){
        $this->message=$message;
        $this->type=$type;
        $this->dispatchBrowserEvent('flash-message');
    }
    public function render()
    {
        return view('livewire.flash');
    }
}
