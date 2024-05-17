<?php

namespace App\Livewire;

use Livewire\Component;

class Student extends Component
{
     public $name,$email, $course;

     public function saveStudent(){
        
     }

    public function render()
    {
        return view('livewire.student');
    }
}
