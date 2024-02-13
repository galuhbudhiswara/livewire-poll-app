<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = ['FIRST'];
    public function render()
    {
        return view('livewire.create-poll');
    }

     public function AddOption() {
        $this->options[] = '';
    }

    public function  removeOption ($index) {
        unset($this->options[$index]);
        $this->options = array_values($this->options);
    }

    // public function mount() {

    // }
}
