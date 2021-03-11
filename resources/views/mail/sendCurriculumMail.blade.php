@component('mail::message')
    <h2>Olá {{$curriculum->name}}</h2>
    <p>Estamos entrando em contato para informar que recebemos seu
        currículo, em breve ele será analisado e entraremos em contato por email
        ou telefone.
    </p>
    <p>
        Abaixo segue um resumo dos dados que recebemos:
    </p>
    <div>
       <p><strong>Nome:</strong> {{$curriculum->name}}</p>
       <p> <strong>Email:</strong> {{$curriculum->email}}</p>
       <p><strong>Telefone:</strong> {{$curriculum->phone}}</p>
       <p><strong>Cargo desejado:</strong> {{$curriculum->job}}</p>
       <p><strong>Escolaridade:</strong> {{$curriculum->schooling}}</p>
       <p><strong>Observações:</strong> {{$curriculum->message}}</p>
       <p><strong>Endereço IP de cadastro:</strong> {{$curriculum->ip_address}}</p>
       <p><strong>Data e hora do envio:</strong> {{date('d/m/Y H:i', strtotime($curriculum->created_at))}}</p>
    </div>
@endcomponent
