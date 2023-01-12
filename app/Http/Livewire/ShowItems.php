<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class ShowItems extends Component
{
    use WithPagination;

    public $warehouse;
    public $search;
    public $perPage = 2;

    // protected $queryString = ['search'];

    public function mount($warehouse) {
        $this->warehouse = $warehouse;
    }

    public function render()
    {
        // $items = Item::where('warehouse_id', $this->warehouse)
        //         ->where('name', 'LIKE', "%$this->search%")
        //         ->orWhere('code', 'LIKE', "%$this->search%")
        //         ->orderBy('created_at', 'desc')
        //         ->paginate(2);

        return view('livewire.show-items', [
            'items' => Item::where(function($sub_query){
                $sub_query->where('warehouse_id', $this->warehouse)
                ->where('name', 'LIKE', "%$this->search%")
                ->orWhere('code', 'LIKE', "%$this->search%")
                ->orderBy('created_at', 'desc');
            })->paginate($this->perPage)
        ]);
    }
}
