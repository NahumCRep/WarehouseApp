<x-layouts.auth title="Registro">
    <div class="main_container">
        <div class="form_container_register">
            <form method="POST" action="{{route('register_user')}}" class="form">
                <h1>Registro</h1>
                <hr>
                @csrf
                <div class="form_grid">
                    <label for="name">
                        nombre
                        <input type="text" name="name" value="{{old('name')}}">
                        @error('name')
                            <small>{{$message}}</small>
                        @enderror
                    </label>
                    <label for="last_name">
                        apellido
                        <input type="text" name="last_name" value="{{old('last_name')}}">
                        @error('last_name')
                            <small>{{$message}}</small>
                        @enderror
                    </label>
                </div>
                <label for="email">
                    correo
                    <input type="email" name="email" value="{{old('email')}}">
                    @error('email')
                        <small>{{$message}}</small>
                    @enderror
                </label>
                <label for="password">
                    contraseña
                    <div class="password_input_div">
                        <input name="password" type="password" class="passwordInput">
                        <i class="fa-solid fa-eye" id="password_eye"></i>
                    </div>
                    @error('password')
                        <small>{{$message}}</small>
                    @enderror
                </label>
                <label for="password_confirmation">
                    confirmar contraseña
                    <div class="password_input_div">
                        <input type="password" name="password_confirmation" class="passwordInput">
                        <i class="fa-solid fa-eye" id="password_eye"></i>
                    </div>
                    @error('password_confirmation')
                        <small>{{$message}}</small>
                    @enderror
                </label>
                <button type="submit" class="submit_btn">Aceptar</button>
            </form>
        </div>
    </div>
</x-layouts.auth>