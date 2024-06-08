<div>
    <button wire:click='openNewLeaderDialog'>
        {{ $slot }}
    </button>
    <x-dialog wire:model="leaderDialog" :maxWidth="'sm'">
        <x-slot name="title">
            @if ($editMode)
            Edit
            @else
            New
            @endif Leader
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession
        <form wire:submit="save">
            <div class="mt-4">
                <x-label for="title" value="{{ __('Position') }}" />
                <x-select wire:model="ul.user_id" class="block mt-1 w-full">
                    <option value="">Select User</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
            </div>
            <div class="mt-4">
                <x-label for="title" value="{{ __('Position') }}" />
                <x-select wire:model="ul.position" class="block mt-1 w-full">
                    <option value="">Select Position</option>
                    @foreach ($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->title }}</option>
                    @endforeach
            </div>
            <div class="flex">
                <div class="mt-4">
                    <x-label for="phone" value="{{ __('From') }}" />
                    <x-input wire:model="ul.start" class="block mt-1 w-full" type="date" />
                </div>
                <div class="mt-4">
                    <x-label for="phone" value="{{ __('End') }}" />
                    <x-input wire:model="ul.end" class="block mt-1 w-full" type="date" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="about" value="{{ __('About Unit') }}" />
                <x-textarea wire:model="ul.about" class="block mt-1 w-full">
                </x-textarea>
            </div>
            <x-button type="submit">
                @if ($editMode)
                Edit
                @else
                Create New
                @endif
            </x-button>
        </form>
    </x-dialog>
</div>