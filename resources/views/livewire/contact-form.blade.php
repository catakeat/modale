<div>
    <form wire:submit.prevent="saveContact">
        <input type="text" wire:model="name" class="form-control">
        @error('name') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="email" class="form-control">
        @error('email') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Contact</button>
    </form>
</div>