<x-layouts.auth title="Inicio">
    <div class="main_container">
        <div class="form_container">
            <form method="POST" action="{{route('login')}}" class="form">
                <h1>Login</h1>
                <hr>
                @csrf
                <label for="email">
                    Correo
                    <input name="email" type="email" value="{{old('email')}}">
                    @error('email')
                        <small>{{$message}}</small>
                    @enderror
                </label>
                <label for="password">
                    Contraseña
                    <div class="password_input_div">
                        <input name="password" type="password" class="passwordInput">
                        <i class="fa-solid fa-eye" id='password_eye'></i>
                    </div>
                    @error('password')
                        <small>{{$message}}</small>
                    @enderror
                </label>
                @error('credentials')
                    <small>{{$message}}</small>
                @enderror
                <button type="submit" class="submit_btn">Aceptar</button>
            </form>
            <a href="{{route('register')}}" class="register_link">no tienes cuenta ?</a>
        </div>
    </div>
</x-layouts.auth>