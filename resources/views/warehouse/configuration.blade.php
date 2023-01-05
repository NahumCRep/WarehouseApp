<x-layouts.app title="Configuracion" :$warehouse>
    <x-slot name="modal"></x-slot>
    <h1>Configuracion del Almacen</h1>
    <hr>
    <div class="configForm_header_div">
        <p> <span style="color: #2ECC71;">&#8594</span> Creado el {{$warehouse->created_at->format('Y-m-d')}}</p>
        <button id="editWarehouseBtn" value="false">
            <i class="fa-solid fa-pen-to-square"></i>
            editar
        </button>
    </div>
    <form method="POST" action="{{route('warehouse.updateWarehouse', $warehouse->id)}}" class="form configForm " id="configWarehouseForm">
        @method('PATCH')
        @csrf
        <div class="form_grid">
            <label for="name">
                Almacen
                <input disabled type="text" name="name" id="configInput" value="{{$warehouse->name}}">
                @error('name')
                    <small>{{$message}}</small>
                @enderror
            </label>
            <label for="location">
                Ubicacion
                <input disabled type="text" name="location" id="configInput" value="{{$warehouse->location}}">
                @error('location')
                    <small>{{$message}}</small>
                @enderror
            </label>
        </div>
        <label for="description">
            Descripcion
            <textarea disabled name="description" id="configInput">{{$warehouse->description}}</textarea>
            @error('description')
                    <small>{{$message}}</small>
            @enderror
        </label>
        <div class="submit_btn_div">
            <button class="submit" id="configSubmitBtn">Aceptar</button>
        </div>
    </form>
    <hr>
    <div>
        <form method="POST" action="{{route('warehouse.deleteWarehouse', $warehouse->id)}}" class="configDeleteForm">
            @method('DELETE')
            @csrf
            <p>
                <strong>Quieres eliminar el almacen ?</strong> <br> se eliminaran los items registrados al almacen y cualquier otros datos ligados al mismo.
                si aun asi quieres eliminarlo ingresa el nombre del almacen.
            </p>
            <div class="configDeleteForm_inputs">
                <input type="hidden" name="deleteCode" value="{{$warehouse->id}}">
                <label for="deleteName" style="display: flex; flex-direction:column;">
                    <input type="text" name="deleteName" >
                    @error('deleteName')
                        <small>{{$message}}</small>
                    @enderror
                </label>
                <button type="submit" class="configDeleteBtn">Eliminar</button>
            </div>
        </form>
    </div>
    {{-- @dump($warehouse) --}}
</x-layouts.app>