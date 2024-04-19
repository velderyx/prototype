<?php

namespace App\Livewire;

use Livewire\Component;

class ToastNotification extends Component
{
    public $message = "hello wirld";


    public function showAlert()
    {
        $this->dispatch('swal');
    }

    public function render()
    {
        return view('livewire.toast-notification');
    }
}
