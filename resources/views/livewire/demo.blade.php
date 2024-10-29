<x-layouts.app>
    <div class="p-6">
        @foreach ($fields as $field)
            field
            {{-- <flux:input wire:model="username" label="Username" description="This will be publicly displayed." /> --}}
        @endforeach
    </div>
</x-layouts.app>
