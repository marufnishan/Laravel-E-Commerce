<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Product::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    }

    public function mount()
    {
        $this->product_cat = 'All Category';
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.header-search-component',['categories'=>$categories]);
    }
}
