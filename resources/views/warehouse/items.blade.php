<x-layouts.app title="Items" :warehouseDashboard="$warehouse->id">
    <x-slot name="modal">
        <x-forms.itemForm :warehouseId="$warehouse->id" />
        <x-forms.itemDeleteForm :warehouseId="$warehouse->id" />
    </x-slot>

    <div class="warehouse_info">
        <div class="items_header_title">
            <i class="fa-solid fa-warehouse"></i>
            <span>{{ $warehouse->name }}</span>
        </div>
    </div>
    <hr>
    <h1>Items del Almacen</h1>
    <hr>
    <div class="items_actions_div">
        <form action="">
            <input type="text" name="search" placeholder="buscar codigo o item">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <button id="itemModalBtn">
            <i class="fa-solid fa-plus"></i>
            agregar item
        </button>
    </div>
    <table class="items_table">
        <thead>
            <tr>
                <th>No.</th>
                <th>codigo</th>
                <th>item</th>
                <th>descripcion</th>
                <th>stock</th>
                <th>ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->stock}}</td>
                    <td>
                        <button title="editar" class="table_edit_btn"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button value="{{$item}}" title="eliminar" class="table_delete_btn"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- @dump($warehouse) --}}
    {{-- @dump($items) --}}
</x-layouts.app>
