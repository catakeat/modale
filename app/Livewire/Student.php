<?php

namespace App\Livewire;

use Livewire\Component;

class Student extends Component
{

    public $name;
    public $email;
    public $course;
   

    protected $rules= [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'course' => 'required'
        ];

    /* public function updated($field)
    {
        $data = $this->validateOnly($field);
       // dd($data);
    }
*/
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function test()
    {
        dd("aici in test");
    }
    public function saveStudent()
    {
         $data = $this->validate();
         dd($data);
    }
    public function render()
    {
        return view('livewire.student')->extends('components.layouts.app');
    }
}
