<x-layouts.app title="Items">
    <x-slot name="modal">
        <x-forms.itemForm :warehouseId="$warehouse->id" />
    </x-slot>
    <h1>Items del Almacen</h1>
    <hr>
    <button id="itemModalBtn">agregar item</button>
    @foreach ($items as $item)
        <span>{{$item->name}}</span>
    @endforeach
    {{-- @dump($warehouse) --}}
    {{-- @dump($items) --}}
</x-layouts.app>