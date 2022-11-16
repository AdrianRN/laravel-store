<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        // Select * from category
        $categories = Category::all();
        return view('livewire.navigation', compact('categories'));
    }
}
