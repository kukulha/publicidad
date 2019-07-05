@component('mail::message')
![Logotipo Publicidad][logo]
# {{ $data->name }} nos encanta saber de ti

Estamos apunto de comenzar una aventura digital.

En unos momentos un asesor se pondra en contacto contigo para darte una propuesta


Gracias {{ $data->name }}<br>
El equipo de {{ config('app.name') }}
[logo]: {{ asset('/img/logo.png') }}
@endcomponent
