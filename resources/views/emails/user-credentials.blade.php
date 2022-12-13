@component('mail::message')
    <h2>Bonjour Mr|Mme {{ $name  }},</h2>

     Email:  {{ $email  }}
     password:  {{ $password  }}

    Merci
@endcomponent
