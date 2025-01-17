<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class RefoundPayment extends Component
{
    // Route Binding Variable
    public $status;


    public function mount($status) {
        $this->status = $status;

        if (!in_array($this->status, [
            'pending',
            'settlement',
        ])) {
            return abort(404);
        }
    }

    public function render()
    {
        return view('livewire.admin.refound-payment')->layout('layouts.admin_app');;
    }
}
