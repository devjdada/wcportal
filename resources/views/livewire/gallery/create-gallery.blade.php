<div class="px-10 mt-12">
    <form wire:submit="save">
        <div class="">
            <x-label>Title</x-label>
            <x-input />
        </div>
        <div class="">
            <x-label>Description</x-label>
            <x-textarea></x-textarea>
        </div>
        <input type="file" wire:model="image">

        @error('image')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit">Save photo</button>
    </form>
</div>
