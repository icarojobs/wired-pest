<?php

namespace App\Http\Livewire\Components;

use App\Models\Newsletter as ModelNewsletter;
use Livewire\Component;

class Newsletter extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function store()
    {
        $this->validate();

        ModelNewsletter::create(['email' => $this->email]);
    }

    public function render()
    {
        return view('livewire.components.newsletter');
    }
}
