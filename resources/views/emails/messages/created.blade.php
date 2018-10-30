<div class="container">@component('mail::message')
# Hello admin


<h2 style="text-transform: uppercase;">{{$name}}</h2>

<h2>{{$email}}</h2>

<p style="font-family: 'times new romain, algerian, calibri">{{$messageContent}}</p>

@component('mail::button', ['url' => route('home'), 'color'=>'green'])
Back To Home
@endcomponent

@component('mail::panel')
Merci,<br>

@endcomponent

{{ config('app.name') }}
@endcomponent

</div>
