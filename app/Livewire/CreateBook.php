<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateBook extends Component
{
    #[Title('Book List - Create')]
    public function render()
    {
        return view('livewire.create-book');
    }
}