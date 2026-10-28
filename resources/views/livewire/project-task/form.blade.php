<div class="space-y-6">

    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
        <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input wire:model="form.description" id="description" name="description" type="text" class="mt-1 block w-full" autocomplete="description" placeholder="Description"/>
        @error('form.description')
        <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="options" :value="__('Options')"/>
        <x-text-input wire:model="form.options" id="options" name="options" type="text" class="mt-1 block w-full" autocomplete="options" placeholder="Options"/>
        @error('form.options')
        <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="cancelled_at" :value="__('Cancelled At')"/>
{{--        <x-text-input wire:model="form.cancelled_at" id="cancelled_at" name="cancelled_at" type="text" class="mt-1 block w-full" autocomplete="cancelled_at" placeholder="Cancelled At"/>--}}
{{--        <x-text-input wire:model="form.cancelled_at" type="date" id="cancelled_at" name="cancelled_at" class="mt-1 block w-full" autocomplete="cancelled_at" placeholder="Cancelled At" />--}}
        <x-date-picker wire:model="form.cancelled_at" id="cancelled_at" name="cancelled_at" />
        @error('form.cancelled_at')
        <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="finished_at" :value="__('Finished At')"/>
{{--        <x-text-input wire:model="form.finished_at" id="finished_at" name="finished_at" type="text" class="mt-1 block w-full" autocomplete="finished_at" placeholder="Finished At"/>--}}
{{--        <x-text-input wire:model="form.finished_at" type="date" id="finished_at" name="finished_at" class="mt-1 block w-full" autocomplete="cancelled_at" placeholder="Cancelled At" />--}}
        <x-date-picker wire:model="form.finished_at" id="finished_at" name="finished_at" />
        @error('form.finished_at')
        <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>


    <div class="flex items-center gap-4">
        <input type="hidden" wire:model.fill="form.project_id"  value="{{ $project }}">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
