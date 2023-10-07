
<div wire:ignore.self id="edit-item-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="mr-auto text-base font-medium">
                   Editing Brand
                </h2>
            </div>
            <form wire:submit.prevent="UpdateCategoryData">
                <div class="grid grid-cols-12 gap-4 modal-body gap-y-3">
                    @csrf
                    <div class="col-span-12">
                        <label for="name" class="flex flex-col w-full form-label sm:flex-row">Brand Name: <span class="mt-1 text-xs sm:ml-auto sm:mt-0 text-slate-500">Required</span> </label>
                        <input type="text"  wire:offline.class="border-warning"  id="title" wire:model.lazy="name" class="form-control flex-1 @error('name') border-danger @enderror" placeholder="Brand Name" >
                        <div class="mt-2 text-danger">@error('name'){{$message}}@enderror</div>
                        <div class="mt-2 text-warning" wire:offline> Attempting to Reconnect to the Internet...........</div>
                    </div>
                </div>
                <div class="text-right modal-footer">
                    <button wire:click="closeEditModal" type="button" class="w-32 mr-1 btn btn-outline-secondary" wire:offline.attr="disabled">Cancel</button>
                    <input type="submit" class="w-32 btn btn-primary" value="Update" wire:offline.attr="disabled">
                </div>
            </form>
        </div>
    </div>
</div>




