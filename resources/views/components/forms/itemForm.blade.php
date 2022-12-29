<div class="modal_bg_title">
    <i class="fa-solid fa-box-archive fa-xl"></i> 
    <span>Agregar Item</span>
</div>

<form method="POST" :action="{{route('warehouse.itemStore', $warehouseId)}}" class="form">
    @csrf
    <div class="form_grid">
        <input type="hidden" name="warehouse" value="{{$warehouseId}}">
        <label for="code">
            Codigo
            <input type="text" name="code" value="{{old('code')}}">
        </label>
        <label for="stock">
            Stock
            <input type="number" name="stock" value="{{old('stock')}}">
        </label>
    </div>
    <label for="name">
        Nombre
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    <label for="description">
        Descripcion
        <textarea name="description"></textarea>
    </label>
    <button type="submit" class="submit_btn">aceptar</button>
</form>