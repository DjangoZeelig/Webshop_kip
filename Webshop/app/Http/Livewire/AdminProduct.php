<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Product;
use Livewire\Component;

class AdminProduct extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $category_id, $name, $price, $color, $size, $population, $description, $highlighted, $product_id;
    public $search = '';

    protected function rules()
    {
        return [
            'category_id' => 'required|integer',
            'name' => 'required|string',
            'price' => 'required|string',
            'color' => 'required|string',
            'size' => 'required|string',
            'population' => 'required|integer',
            'description' => 'required|string',
            'highlighted' => 'required|integer',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveProduct()
    {
        $validatedData = $this->validate();

        Product::create($validatedData);
        session()->flash('message', 'Product created successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function editProduct(int $product_id)
    {
        $product = Product::find($product_id);
        if($product) {
            $this->product_id = $product->id;
            $this->category_id = $product->category_id;
            $this->name = $product->name;
            $this->price = $product->price;
            $this->color = $product->color;
            $this->size = $product->size;
            $this->population = $product->population;
            $this->description = $product->description;
            $this->highlighted = $product->highlighted;
        }else{
            return redirect()->to('/products');
        }
    }

    public function updateProduct()
    {
        $validatedData = $this->validate();

        Product::where('id', $this->product_id)->update([
        'category_id' => $validatedData['category_id'],
        'name' => $validatedData['name'],
        'price' => $validatedData['price'],
        'color' => $validatedData['color'],
        'size' => $validatedData['size'],
        'population' => $validatedData['population'],
        'description' => $validatedData['description'],
        'highlighted' => $validatedData['highlighted'],
        ]);
            session()->flash('message', 'Product updated successfully!');
            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteProduct(int $product_id)
    {
        $this->product_id = $product_id;
    }

    public function destroyProduct()
    {
        Product::find($this->product_id)->delete();
        session()->flash('message', 'Product deleted successfully!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->category_id = '';
        $this->name = '';
        $this->price = '';
        $this->color = '';
        $this->size = '';
        $this->population = '';
        $this->description = '';
        $this->highlighted = '';
    }

    public function render()
    {
        $products = Product::where('name', 'like', '%'.$this->search.'%')->orderBy('id', 'DESC') ->paginate(10);
        return view('livewire.admin-product', ['products' => $products]);
    }
}
