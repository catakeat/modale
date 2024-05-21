<div>
    <form wire:submit.prevent="submit">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" wire:model.blur="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="TEXT" id="email" wire:model.blur="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Submit</button>
    </form>

    @if ($successMessage)
    <div>{{ $successMessage }}</div>
    @endif
</div>