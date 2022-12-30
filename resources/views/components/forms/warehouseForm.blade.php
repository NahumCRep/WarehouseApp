<div class="modal_bg_title">
    <i class="fa-solid fa-xl fa-warehouse"></i> 
    <span>Crear Almacen</span>
</div>

<form method="POST" action="{{route('warehouse.store')}}" class="form">
    @csrf
    <label for="name">
        Nombre del almacen
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            <small>{{$message}}</small>
        @enderror
    </label>
    <label for="location">
        Ubicacion
        <input type="text" name="location" value="{{old('location')}}">
        @error('location')
            <small>{{$message}}</small>
        @enderror
    </label>
    <label for="description">
        Descripcion
        <textarea name="description"></textarea>
        @error('description')
            <small>{{$message}}</small>
        @enderror
    </label>
    <button type="submit" class="submit_btn">aceptar</button>
</form>