<form wire:submit="save" class="p-6 space-y-6">
    @foreach ($fields as $field)
        <flux:input wire:model="data.{{ $field['label'] }}" label="{{ $field['label'] }}"
            description="{{ $field['description'] }}" placeholder="{{ $field['placeholder'] }}" />
    @endforeach

    <div>
        <flux:button variant="primary" type="submit">Submit</flux:button>
    </div>
</form>
