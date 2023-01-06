<nav class="nav">
    <ul>
        <li>
            <a href="{{route('warehouse')}}">almacenes</a>
        </li>
        <li>
            <a href="{{route('logout')}}">salir</a>
        </li>
        @if ($warehouse)
            <li>
                {{-- <a href="{{route('warehouse.items', $warehouse)}}">Items</a> --}}
                <a href="{{route('items.index', $warehouse)}}">Items</a>
            </li>
            <li>
                <a href="{{route('warehouse.configuration', $warehouse)}}">configuracion</a>
            </li>
        @endif
    </ul>
</nav>