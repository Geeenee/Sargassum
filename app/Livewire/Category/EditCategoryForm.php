<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class EditCategoryForm extends Component
{

    public $name;
    public $oldname;
    public $modelId;


    protected function rules(){
        return [
            'name' => ['required'],Rule::unique('categories')->ignore($this->modelId),
        ];
    }
    /*
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|unique:brand,name,'.$this->modelId.'',
        ]);
    }*/

    protected $listeners = [
        'getModelId',
        'refreshChild' => '$refresh',
        'forceCloseEditModal',
    ];
    // Populate Data
    public function getModelId($modelId)
    {
        $this->modelId = $modelId;
        $category = Category::findorFail($this->modelId);
        $this->name = $category->name;
    }

    //Submit Data
    public function UpdateCategoryData(){
        $model = Category::find($this->modelId);
        $this->validate();
        $model->name = $this->name;
        $model->update();
        $this->cleanVars();
        $this->dispatch('post-created', postId: $this->post->id);

        $this->dispatchBrowserEvent('closeEditModal');
        $this->emit('refreshParent');
        $this->resetErrorBag();
    }
    private function cleanVars(){
        $this->modelId = null;
        $this->name = null;
        $this->oldname = null;
    }
    public function render()
    {
        return view('livewire.category.edit-category-form');
    }
}
