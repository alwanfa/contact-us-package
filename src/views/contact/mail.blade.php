@component('mail::message')
# Introduction

Ada pesan baru dari {{$name}}<br>
email : {{$email}}<br>
Pesan : 
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
