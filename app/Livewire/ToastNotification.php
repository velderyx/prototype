<?php

namespace App\Livewire;

use Livewire\Component;

class ToastNotification extends Component
{
    public $message = "hello wirld";

    protected $listeners = ['showAlertSignal' => 'showAlertSignal'];

    public function showAlertSignal()
    {
        $this->showAlert();
    }

    public function showAlert()
    {
        $this->dispatch('swal');
    }

    public function mount(): void
    {
        if (session()->has('alerts')) {
            $this->showAlertSignal();
            session()->forget('alerts');
        }
    }

    public function render()
    {
        return view('livewire.toast-notification');
    }
}
