<!-- Modal -->
<div>
    <div wire:ignore.self class="modal fade" id="adminProductModal" tabindex="-1" aria-labelledby="adminProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminProductModalLabel">Create Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeModal"></button>
            </div>
                <form wire:submit.prevent="saveProduct">
        <div class="modal-body">
            {{-- <div class="mb-3">
                <label> Id </label>
                <input type="text" wire:model="id" class="form-control">
                @error('id')
                    <span class="error">{{ $message }}</span> @enderror
            </div> --}}
            <div class="mb-3">
                <label> Category Id </label>
                <input type="text" wire:model="category_id" class="form-control">
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label> Name </label>
                <input type="text" wire:model="name" class="form-control">
                @error('name')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label> Price </label>
                <input type="text" wire:model="price" class="form-control">
                @error('price')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label> Color </label>
                <input type="text" wire:model="color" class="form-control">
                @error('color')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label> Size </label>
                <input type="text" wire:model="size" class="form-control">
                @error('size')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label> Population </label>
                <input type="text" wire:model="population" class="form-control">
                @error('population')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label> Description </label>
                <input type="text" wire:model="description" class="form-control">
                @error('description')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label> Highlighted </label>
                <input type="text" wire:model="highlighted" class="form-control">
                @error('highlighted')
                    <span class="text-danger">{{ $message }}</span> @enderror
            </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="updateAdminProductModal" tabindex="-1" aria-labelledby="updateAdminProductModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateAdminProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateProduct">
                <div class="modal-body">
                    <div class="mb-3">
                        <label> Category Id </label>
                        <input type="text" wire:model="category_id" class="form-control">
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label> Name </label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label> Price </label>
                        <input type="text" wire:model="price" class="form-control">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label> Color </label>
                        <input type="text" wire:model="color" class="form-control">
                        @error('color')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label> Size </label>
                        <input type="text" wire:model="size" class="form-control">
                        @error('size')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label> Population </label>
                        <input type="text" wire:model="population" class="form-control">
                        @error('population')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label> Description </label>
                        <input type="text" wire:model="description" class="form-control">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label> Highlighted </label>
                        <input type="text" wire:model="highlighted" class="form-control">
                        @error('highlighted')
                            <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="deleteAdminProductModal" tabindex="-1" aria-labelledby="deleteAdminProductModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAdminProductModalLabel">Delete Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyProduct">
                <div class="modal-body">
                    <h4>Are you sure you want to delete this data ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
