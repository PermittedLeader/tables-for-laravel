
    <x-tiffey::button
        wire:click="detach('{{ addslashes(get_class($data)) }}','{{ $data->id }}')"
        color="bg-danger-100"
        >
        <x-tiffey::icon.detach label="{{ $actionComponent->title }}" />
    </x-tiffey::button>