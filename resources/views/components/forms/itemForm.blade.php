<div class="item_form_container">
    <div class="item-page-warehouse">
        <span>&raquo;</span>
        <p>Agregar Item</p>
    </div>
    <form method="POST" :action="{{ route('warehouse.itemStore', $warehouseId) }}" class="item_form">
        @csrf
        <input type="hidden" name="warehouse" value="{{$warehouseId}}">
        <div class="item_form_content">
            <div class="form_first_side">
                <div class="grid_two_cols">
                    <label for="code">
                        <span>Código</span>
                        <input type="text" name="code" value="{{ old('code') }}">
                        @error('code')
                            <small>{{$message}}</small>
                        @enderror
                    </label>
                    <label for="stock">
                        <span>Stock</span>
                        <input type="number" name="stock" value="{{ old('stock') }}">
                        @error('stock')
                            <small>{{$message}}</small>
                        @enderror
                    </label>
                </div>
                <label for="name">
                    <span>Item</span>
                    <input type="text" name="name" value="{{ old('name') }}">
                    @error('name')
                        <small>{{$message}}</small>
                    @enderror
                </label>
            </div>
            <div class="form_second_side">
                <label for="description" class="label_description">
                    <span>Descripción</span>
                    <textarea name="description"></textarea>
                </label>
            </div>
        </div>
        <hr>
        <div class="form_footer">
            <button type="submit" class="submit_btn">aceptar</button>
        </div>
    </form>
</div>
