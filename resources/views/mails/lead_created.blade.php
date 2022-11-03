
@component('mail::message')
# Nuovo post

Nome: {{$lead->name}}<br>
Email: {{$lead->email}}<br>
Message: <br> 
{{$lead->message}} <br>
Grazie <br>

 

@endcomponent