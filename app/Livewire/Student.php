<?php

namespace App\Livewire;
use Livewire\Component;

class Student extends Component
{
  
    public function test()
    {
        dd("aici in test");
    }
   
    public function render()
    {
        return view('livewire.student')->extends('components.layouts.app');
    }
}

