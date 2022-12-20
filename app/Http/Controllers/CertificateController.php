<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use Carbon\Carbon;

class CertificateController extends Controller
{
    function participant(){

        $data['name'] = "Herton";
        $data['cpf'] = "067.811.094-80";
        $data['typeevent'] = "oficina";
        $data['subevent'] = "Make e cuidados com a pele";
        $data['event'] = "Semana Nacional da Consciência Negra 2022";
        $data['dataevent'] = "18 a 20 de Novembro de 2022";
        $data['city'] = "Floresta";
        $data['state'] = "PE";


        $pdf = Pdf::loadView('certificates.participant', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }

    function monitor(){

        $data['name'] = "Herton";
        $data['cpf'] = "067.811.094-80";
        $data['typeevent'] = "oficina";
        $data['subevent'] = "Make e cuidados com a pele";
        $data['event'] = "Semana Nacional da Consciência Negra 2022";
        $data['dataevent'] = "18 a 20 de Novembro de 2022";
        $data['city'] = "Floresta";
        $data['state'] = "PE";


        $pdf = Pdf::loadView('certificates.monitor', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }

    function guest(){

        $data['name'] = "Herton";
        $data['cpf'] = "067.811.094-80";
        $data['typeevent'] = "oficina";
        $data['subevent'] = "Make e cuidados com a pele";
        $data['event'] = "Semana Nacional da Consciência Negra 2022";
        $data['dataevent'] = "18 a 20 de Novembro de 2022";
        $data['city'] = "Floresta";
        $data['state'] = "PE";


        $pdf = Pdf::loadView('certificates.guest', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }
}
