<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function test(){
        dd("ajaja");
    }
    public function render()
    {
        return view('livewire.test')->extends('components.layouts.app');
    }
}
