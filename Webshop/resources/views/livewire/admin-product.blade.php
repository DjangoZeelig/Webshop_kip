<div>

    @include('livewire.adminproductmodal')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <h5 class="alert alert-succes">{{ session('message') }}</h5>
                    @endif


                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product
                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#adminProductModal">Add New Product</button>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Population</th>
                                    <th>Description</th>
                                    <th>Highlighted</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->color }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->population }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->highlighted }}</td>
                                    <td>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#updateAdminProductModal" wire:click="editProduct({{ $product->id }})" class="btn btn-primary">Edit</button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteAdminProductModal" wire:click="deleteProduct({{ $product->id }})" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                    <tr>
                                        <td colspan="5">No Record Found</td>
                                    </tr>
                            @endforelse
                        </tbody>
                    </table>
                                <div>
                                    {{ $products->links() }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
