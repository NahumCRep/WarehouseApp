@props(['warehouseId','item'=>false])

<div class="item_form_container">
    <div class="page_title_container">
        <div class="item-page-warehouse">
            <span>&raquo;</span>
            <p>{{!$item ? 'Agregar Item' : 'Editar Item' }}</p>
        </div>
        @if ($item)
            <button 
                type="button" 
                onclick="window.location='{{route('items.index', $warehouseId)}}'" 
                {{-- onclick="window.location='{{route('warehouse.items', $warehouseId)}}'"  --}}
                class="cancel_btn"
            >
                cancelar edicion
            </button>
        @endif
    </div>
    <form 
        method="POST" 
        :action="{{route('item.store', $warehouseId)}}" 
        {{-- :action="{{
            !$item 
            ? route('item.store', $warehouseId)
            : route('warehouse.updateItem', ['warehouse'=>$warehouseId, 'item'=>$item])
        }}"  --}}
        class="item_form"
    >
        @if ($item)
            @method('PATCH')
        @endif

        @csrf
        <input type="hidden" name="warehouse" value="{{$warehouseId}}">
        <div class="item_form_content">
            <div class="form_first_side">
                <div class="grid_two_cols">
                    <label for="code">
                        <span>Código</span>
                        <input type="text" name="code" value="{{old('code', $item ? $item->code : '')}}">
                        @error('code')
                            <small>{{$message}}</small>
                        @enderror
                    </label>
                    <label for="stock">
                        <span>Stock</span>
                        <input type="number" name="stock" value="{{ old('stock',  $item ? $item->stock : '') }}">
                        @error('stock')
                            <small>{{$message}}</small>
                        @enderror
                    </label>
                </div>
                <label for="name">
                    <span>Item</span>
                    <input type="text" name="name" value="{{ old('name', $item ? $item->name : '') }}">
                    @error('name')
                        <small>{{$message}}</small>
                    @enderror
                </label>
            </div>
            <div class="form_second_side">
                <label for="description" class="label_description">
                    <span>Descripción</span>
                    <textarea name="description">{{old('description',  $item ? $item->description : '')}}</textarea>
                </label>
            </div>
        </div>
        <hr>
        <div class="form_footer {{$item ? 'flex_between' : ''}}">
            {{-- @if ($item)
                <p class="created_at_p">registrado el {{$item->created_at->format('d/m/Y')}}</p>
            @endif --}}
            <button type="submit" class="submit_btn_item">aceptar</button>
        </div>
    </form>
</div>
