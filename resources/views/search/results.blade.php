<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Semana Nacional da Consciência Negra 2022</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::to('/') }}/css/styledashboard.css">
</head>
<body class="d-flex flex-column h-100">
    <div id="app">
        
    <div id="header">
       
    </div>

        <main class="flex-shrink-0 py-4">
           <div class="container">
                <div class="row">
                  <div class="col-12 text-center">
                     <img src="{{ URL::to('/') }}/images/data.jpg" alt="" />
                   </div>
                   <div class="col-12 text-center">
                     <img src="{{ URL::to('/') }}/images/logo.jpg" alt="" />
                   </div>
                   <div class="col-12 text-center">
                     <img src="{{ URL::to('/') }}/images/campus.jpg" alt="" />
                   </div>
                </div>
           </div>
           <div style="background: #e5e5e5; margin-top: 20px; padding-bottom: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mt-5">
                            <h2>RESULTADO DA PESQUISA</h2>
                            <br>
                            @if(count($guests) > 0)
                            <h3>Certificados como convidado:</h3>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Atividade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($guests as $item)
                                 @php
                                    $certificates = getCertificatesGuest($item->id);
                                 @endphp
                                @foreach($certificates as $certificate)
                                    <tr>
                                        <td>{{ $certificate->name }} <a href="/guest/certificate/{{ $certificate->id }}/{{ $item->id }}"  target="_blank" class="btn btn-info">Certificado</a></td>
                                    </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                            @endif
                            @if(count($monitors) > 0)
                            <h3>Certificados como monitor:</h3>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Atividade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($monitors as $item)
                                 @php
                                    $certificates = getCertificatesMonitor($item->id);
                                 @endphp
                                @foreach($certificates as $certificate)
                                    <tr>
                                        <td>{{ $certificate->name }} <a href="/monitor/certificate/{{ $certificate->id }}/{{ $item->id }}"  target="_blank" class="btn btn-info">Certificado</a></td>
                                    </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                            @endif
                            @if(count($participants) > 0)
                            <h3>Certificados como participante:</h3>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Atividade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($participants as $item)
                                 @php
                                    $certificates = getCertificatesParticipant($item->id);
                                 @endphp
                                    @foreach($certificates as $certificate)
                                    <tr>
                                        <td>{{ getSubEventName($certificate->subevent_id) }} <a href="/participant/certificate/{{ $certificate->participant_id }}/{{ $certificate->subevent_id }}"  target="_blank" class="btn btn-info">Certificado</a></td>
                                    </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ URL::to('js/jquery.mask.min.js') }}" crossorigin="anonymous"></script>
<script>
    $("#whatsapp").mask('(00) 00000-0000');
    $("#cpf").mask('999.999.999-99');
 </script>
</body>
</html>
