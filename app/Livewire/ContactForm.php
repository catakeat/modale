<?php

namespace App\Livewire;
use Livewire\Component;
namespace App\Livewire;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

      //  Contact::create($validatedData);
    }
  
    public function render()
    {
        return view('livewire.contact-form')->extends('components.layouts.app');
    }
}