<?php

namespace App\Livewire;

use Livewire\Component;
/*
class UserForm extends Component
{
    public function render()
    {
        return view('livewire.user-form');
    }
}*/


class UserForm extends Component
{
    public $name;
    public $email;
    public $successMessage;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|min:2',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $this->validate();

        // Handle form submission logic (e.g., save to the database)
        // For demonstration purposes, we'll just display a success message
        $this->successMessage = 'Form submitted successfully!';

        // Reset form fields
        $this->reset(['name', 'email']);
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}

