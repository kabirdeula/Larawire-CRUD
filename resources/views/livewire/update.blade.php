<form>
    <input type="hidden" wire:model="category_id">

    <div class="form-group mb-3">
        <label for="category_name">Name:</label>

        <input type="text" id="category_name" class="form-control @error('name')
            is-invalid @enderror"
            placeholder="Enter Name" wire:model.lazy="name">

        @error('name')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label for="category_descripton">Description:</label>

        <input type="text" id="category_descripton"
            class="form-control @error('description')
            is-invalid @enderror" placeholder="Enter Description"
            wire:model.lazy="description">

        @error('description')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="d-grid gap-2">
        <button wire:click.prevent="update()" class="btn btn-success btn-block">Save</button>

        <button wire:click.prevent="cancel()" class="btn btn-success btn-block">Cancel</button>
    </div>
</form>
