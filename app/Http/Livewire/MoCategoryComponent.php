<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class MoCategoryComponent extends Component
{
    public function render()
    {$categories = Category::all();
        return view('livewire.mo-category-component',['categories'=>$categories]);
    }
}
