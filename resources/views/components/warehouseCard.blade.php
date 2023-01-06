<div class="warehouse_card">
    {{-- <a href="{{route('warehouse.items', $data->id)}}"> --}}
    <a href="{{route('items.index', $data->id)}}">
        <div class="wcard_bg_title">
            <i class="fa-solid fa-warehouse"></i> 
            <span>Almacen</span>
        </div>
        <div class="wcard_body">
            <div class="wcard_body_title">
                <p class="wcard_title">{{$data->name}}</p>
            </div>
            <div class="wcard_body_items">
                <i class="fa-solid fa-box-archive"></i>
                items: {{$data->items}}
            </div>
        </div>
    </a>
</div>