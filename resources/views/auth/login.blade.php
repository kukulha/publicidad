@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<main>
    <div class="fondo1">
        <div class="valign-wrapper">
            <div class="container row">
                <div class="center section">
                    <img src="/img/logo.png" class="responsive-img " width="250px" alt="">
                </div>
                
                <div class="col m8 s12 offset-m2">
                    <h4 class="rojo subtitulo center white-text z-depth-5 section">Iniciar Sesión</h4>
                    <div class="card-panel azul">
                        {!! Form::open(['route' => 'login', 'method', 'POST']) !!}
                            <div class="input-field">
                                {{ Form::label('email', 'Correo Electrónico', ['class' => 'white-text']) }}
                                {{ Form::email('email', null, ['id' => 'email', 'class' => 'white-text']) }}
                                @error('email')
                                    <span class="helper-text rojo-text title">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-field">
                                {{ Form::label('password', 'Contraseña', ['class' => 'white-text']) }}
                                {{ Form::password('password', null, ['id' => 'password', 'class' => 'white-text']) }}
                                @error('password')
                                    <span class="helper-text rojo-text title">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-field">
                                <p>
                                    <label>
                                        {{ Form::checkbox('remember', null) }}
                                        <span class="white-text title">Recordar</span>
                                    </label>
                                </p>
                            </div>

                            <div class="input-field">
                                {{ Form::submit('Iniciar Sesión', ['class' => 'btn white rojo-text']) }}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
