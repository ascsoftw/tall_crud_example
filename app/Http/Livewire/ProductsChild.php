<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;

class ProductsChild extends Component
{
    protected $listeners = [
        'showDeleteForm',
        'showCreateForm',
        'showEditForm',
    ];

    public $item;
    public $brands = [];

    protected $rules = [
        'item.name' => 'required|min:3|max:50',
        'item.price' => 'required|numeric',
        'item.sku' => 'required|min:3',
        'item.status' => '',
        'item.brand_id' => 'required',
    ];

    protected $validationAttributes = [
        'item.name' => 'Name',
        'item.price' => 'Price',
        'item.sku' => 'Sku',
        'item.status' => 'Active',
        'item.brand_id' => 'Brand',
    ];

    public $confirmingItemDeletion = false;
    public $primaryKey;
    public $confirmingItemCreation = false;
    public $confirmingItemEdition = false;

    public function render()
    {
        return view('livewire.products-child');
    }

    public function showDeleteForm($id)
    {
        $this->confirmingItemDeletion = true;
        $this->primaryKey = $id;
    }

    public function deleteItem()
    {
        Product::destroy($this->primaryKey);
        $this->confirmingItemDeletion = false;
        $this->primaryKey = '';
        $this->reset(['item']);
        $this->emitTo('products', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Deleted Successfully');
    }
 
    public function showCreateForm()
    {
        $this->confirmingItemCreation = true;
        $this->resetErrorBag();
        $this->reset(['item']);

        $this->brands = Brand::all();
    }

    public function createItem() 
    {
        $this->validate();
        $item = Product::create([
            'name' => $this->item['name'] ?? '', 
            'price' => $this->item['price'] ?? '', 
            'sku' => $this->item['sku'] ?? '', 
            'status' => $this->item['status'] ?? 0, 
            'brand_id' => $this->item['brand_id'] ?? 0, 
        ]);
        $this->confirmingItemCreation = false;
        $this->emitTo('products', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Added Successfully');
    }
 
    public function showEditForm(Product $product)
    {
        $this->resetErrorBag();
        $this->item = $product;
        $this->confirmingItemEdition = true;

        $this->brands = Brand::all();
    }

    public function editItem() 
    {
        $this->validate();
        $this->item->save();
        $this->confirmingItemEdition = false;
        $this->primaryKey = '';
        $this->emitTo('products', 'refresh');
        $this->emitTo('livewire-toast', 'show', 'Record Updated Successfully');
    }

}
