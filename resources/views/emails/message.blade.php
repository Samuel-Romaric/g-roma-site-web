@component('mail::message')
# Mail de la part de {{ $name }}.

- {{ $email }}
- {{ $subject }}

Salut ! Je suis {{ $name }}

@component('mail::panel')
	{{ $msg }}
@endcomponent

@component('mail::button', ['url' => ''])
	Button Text
@endcomponent

Thanks,<br>
	{{ config('app.name') }}
@endcomponent
