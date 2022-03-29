<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ZeroInArrayBug extends Component
{
    public $input = "";
    public $words = [];
    public $combinations = [];

    public function submit()
    {
        $this->words = explode(' ', $this->input);

        foreach ($this->words as $word) {
            foreach ($this->words as $second) {
                $this->combinations[$word.$second] = "This is an element with a key a key: {$word} {$second}";
            }
        }
    }

    public function render()
    {
        return view('livewire.zero-in-array-bug');
    }
}
