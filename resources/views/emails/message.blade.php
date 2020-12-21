@component('mail::message')
# Mail de la part de {{ $name }}.

- <b>E-mail : </b>{{ $email }}
- <b>Objet : </b>{{ $subject }}

Salut ! Je suis <b>{{ $name }}</b>

@component('mail::panel')
	{{ $msg }}
@endcomponent

Thanks ! <br>
	{{ config('app.name') }}
@endcomponent
