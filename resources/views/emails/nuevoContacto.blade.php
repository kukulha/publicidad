@component('mail::message')
# Nuevo contacto desde la web



Nombre: {{ $data->name }}

Correo: {{ $data->email }}

Teléfono: {{ $data->phone }}

Mensaje:

##{{ $data->body }}

Gracias,<br>
{{ config('app.name') }}


@endcomponent
