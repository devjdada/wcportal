<div class="flex gap-6 p-6">
    <x-button wire:click='save'>Generate Homecells Save</x-button>
    <x-button wire:click='genOw'>Generate OW</x-button>

    <div class="">
        <h1 class="text-2xl text-gray-900 dark:text-white">
            Generate Homecell Report
        </h1>
        <form wire:submit='genWsfReport'>
            <x-input wire:model='wsfNum' type='text' class="block w-full" />
            <x-input wire:model='wsfDate' type='date' class="block w-full" />
            <x-button>Generate</x-button>
        </form>
    </div>
</div>
