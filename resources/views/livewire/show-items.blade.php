{{-- The best athlete wants his opponent at his best. --}}
<section class="item_table_section">
    {{-- search section --}}
    <div class="table_search_container">
        <div class="item-page-warehouse">
            <span>&raquo;</span>
            <p>Listado de Items</p>
        </div>
        {{-- <form wire:submit.prevent="search" class="item_form_search">
            <input type="text"wire:model="search" placeholder="busca algun item ?">
            <button type="submit" id="search_item_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form> --}}

        <div class="item_search_div">
            <input wire:model="search" type="search" placeholder="Buscar item..." />
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
    {{-- end search section --}}
    <table class="items_table">
        <thead>
            <tr>
                <th>No.</th>
                <th>codigo</th>
                <th>item</th>
                <th>descripcion</th>
                <th>stock</th>
                <th>op.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ 
                        $items->currentPage() > 1
                        ? $loop->iteration + $items->currentPage()
                        : $loop->iteration
                    }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <button onclick="window.location='{{ route('items.index', [$warehouse, $item]) }}'"
                            title="editar" class="table_edit_btn">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button value="{{ $item }}" title="eliminar" class="table_delete_btn"><i
                                class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <div class="table_footer">
                        {{-- <button onclick="window.location='{{ $items->previousPageUrl() }}'"
                            {{ $items->currentPage() <= 1 ? 'disabled' : null }}>
                            <i class="fa-solid fa-angles-left"></i>
                        </button>
                        <p>{{ $items->currentPage() . ' / ' . $items->lastPage() }}</p>
                        <button onclick="window.location='{{ $items->nextPageUrl() }}'"
                            {{ $items->hasMorePages() ? null : 'disabled' }}>
                            <i class="fa-solid fa-angles-right"></i>
                        </button> --}}
                        {{-- <a href="{{ $items->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        <p>{{ $items->currentPage() . ' / ' . $items->lastPage() }}</p>
                        <a href="{{ $items->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a> --}}
                        {{ $items->links('livewire.pagination') }}
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
    @dump($items->currentPage())
    @dump($items)
</section>
