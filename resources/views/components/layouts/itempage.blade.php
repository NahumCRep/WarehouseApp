<x-layouts.app :$title :$warehouse>
    <x-slot name="modal">
        <x-forms.itemDeleteForm :warehouseId="$warehouse->id" />
    </x-slot>

    <div class="item-page-warehouse">
        <i class="fa-solid fa-warehouse"></i>
        <p>{{ $warehouse->name }} <span>&raquo;</span> items</p>
    </div>
    {{-- first section space -> for form section  --}}
    {{ $slot }}
    {{-- items table --}}
    <livewire:show-items :warehouse="$warehouse->id" />
</x-layouts.app>