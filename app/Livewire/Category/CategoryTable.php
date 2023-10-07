<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $perPage =12;
    public $search = null;

    public $action;

    public $selectedItem;

 public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;

        if ($action == 'edit') {
            $this->dispatch('OpenEditModal');

         //   $this->emit('getModelId', $this->selectedItem);
        } elseif ($action == 'delete') {
            $this->emit('getModelInfo', $this->selectedItem);
            $this->dispatchBrowserEvent('OpenDeleteModal');
        } else {

        }
        $this->action = $action;
    }

    public function render()
    {

        return view('livewire.category.category-table',[
            'categories' =>  Category::paginate(10)
        ]);
    }
}
