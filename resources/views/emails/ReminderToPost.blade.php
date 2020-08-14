@component('mail::message')
# Hello {{$user->name}},


Long Time u didn't post at our App.

@component('mail::button', ['url' => config('app.url')])
Visit Us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
