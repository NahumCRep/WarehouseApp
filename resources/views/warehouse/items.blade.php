<x-layouts.itempage title="Items" :$warehouse :$items>
    <section class="item-page-form-section">
        <x-forms.itemForm :warehouseId="$warehouse->id" />
    </section>
</x-layouts.itempage>


{{-- 
<x-layouts.app title="Items" :warehouseDashboard="$warehouse->id">
    <x-slot name="modal">
        <x-forms.itemForm id="itemFormModalComponent" :warehouseId="$warehouse->id" :data="false" />
        <x-forms.itemDeleteForm :warehouseId="$warehouse->id" />
    </x-slot>

    <div class="item-page-warehouse">
        <i class="fa-solid fa-warehouse"></i>
        <p>{{ $warehouse->name }} <span>&raquo;</span> items</p>
    </div>

    <section class="item-page-form-section">
        <div class="item_search_div">
            <form action="" class="item_form_search">
                <input type="text" placeholder="busca algun item ?">
                <button type="submit" id="search_item_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="icons_container">
                <button><i class="fa-solid fa-user-plus"></i></button>
            </div>
        </div>
        
        <x-forms.itemForm :warehouseId="$warehouse->id"  />
    </section>

    <section class="item_table_section">
        <div class="item-page-warehouse">
            <span>&raquo;</span>
            <p>Listado de Items</p>
        </div>
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
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <button value="{{ $item }}" title="editar" class="table_edit_btn"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button value="{{ $item }}" title="eliminar" class="table_delete_btn"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    @dump($items)
</x-layouts.app> --}}
