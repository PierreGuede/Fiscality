@component('mail::message')
    <h2>Bonjour Mr|Mme {{ $name  }},</h2>

     Identifiant:  {{ $username  }}
     Email:  {{ $email  }}
     password:  {{ $password  }}

    Merci
@endcomponent
