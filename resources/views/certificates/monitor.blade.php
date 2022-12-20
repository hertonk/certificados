@php

use Carbon\Carbon;

@endphp

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Semana Nacional da Consciência Negra 2022 - IFSertãoPE/Campus Floresta</title>

        <!-- Styles -->
        <style>
            
            @page { margin:0px; }

            body{
                margin: 0px;
                padding: 0px;
                font-family: 'Roboto', sans-serif;
            }

           .background{
                background-image: url('images/background-certificate.jpeg');
                background-size: cover;
                height: 793px;
            }

            .texto{
                padding-top: 300px;
                padding-left: 150px;
                padding-right: 150px;
                font-size: 14pt;
            }

        </style>

    </head>
    <body>
       <div class="background">
            <div class="texto">
            <p>Certificamos que {{ $name }}, portador(a) do CPF de Nº {{ $cpf }} foi monitor(a) da {{ $typeevent }} intitulado(a) <strong>"{{ $subevent }}"</strong> realizado(a) na <strong>{{ $event }}</strong> de {{ $dataevent }}.</p>
            <br />
            <br />
            <p style="text-align: center;">{{ $city }}-{{ $state }}, {{ date('d') }} de Dezembro de 2022</p>
            </div>
       </div>
    </body>
</html>
