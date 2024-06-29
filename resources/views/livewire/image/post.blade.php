<div class=" mt-9 pt-9 mx-12">
    @if ($photos)
        <div class="grid grid-cols-8 gap-3">
            @foreach ($photos as $photo)
                <div>
                    <img src="{{ $photo->temporaryUrl() }}">
                </div>
            @endforeach
        </div>
    @endif
    <form wire:submit="save">
        <input type="file" wire:model="photos" multiple>

        @error('photos.*')
            <span class="error">{{ $message }}</span>
        @enderror

        <x-button type="submit">Save photo</x-button>
    </form>
</div>
