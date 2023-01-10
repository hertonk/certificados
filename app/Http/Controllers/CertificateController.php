<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use Carbon\Carbon;

use App\Models\SubEvent;
use App\Models\Guest;
use App\Models\Event;
use App\Models\Certificate;
use App\Models\Monitor;
use App\Models\Participant;

class CertificateController extends Controller
{

    function participant($participant, $subevent){

        $subevent = SubEvent::find($subevent);
        $participant = Participant::find($participant);
        $event = Event::find($subevent->event_id);

        $data['name'] = $participant->name;
        $data['cpf'] = $participant->cpf;
        $data['typeevent'] = $subevent->type;
        $data['subevent'] = $subevent->name;
        $data['event'] = $event->name;
        $data['dataevent'] = $event->date;
        $data['city'] = $event->city;
        $data['state'] = $event->state;

        $check = md5($participant->name.$participant->cpf.$subevent->type.$subevent->name.$event->name.$event->date.$event->city.$event->state.'participant');

        $data['check'] = $check;

        $search = Certificate::where('check', $check)->get();

        if(count($search) > 0){



        } else {

            Certificate::create([
                'name' => $participant->name,
                'cpf' => $participant->cpf,
                'typeevent' => $subevent->type,
                'subevent' => $subevent->name,
                'event' => $event->name,
                'dataevent' => $event->date,
                'city' => $event->city,
                'state' => $event->state,
                'role' => 'participant',
                'check' => $check
            ]);

        }

        $pdf = Pdf::loadView('certificates.participant', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }

    function monitor($id, $monitor){

        $subevent = SubEvent::find($id);
        $monitor = Monitor::find($monitor);
        $event = Event::find($subevent->event_id);

        $data['name'] = $monitor->name;
        $data['cpf'] = $monitor->cpf;
        $data['typeevent'] = $subevent->type;
        $data['subevent'] = $subevent->name;
        $data['event'] = $event->name;
        $data['dataevent'] = $event->date;
        $data['city'] = $event->city;
        $data['state'] = $event->state;

        $check = md5($monitor->name.$monitor->cpf.$subevent->type.$subevent->name.$event->name.$event->date.$event->city.$event->state.'monitor');

        $data['check'] = $check;

        $search = Certificate::where('check', $check)->get();

        if(count($search) > 0){



        } else {

            Certificate::create([
                'name' => $monitor->name,
                'cpf' => $monitor->cpf,
                'typeevent' => $subevent->type,
                'subevent' => $subevent->name,
                'event' => $event->name,
                'dataevent' => $event->date,
                'city' => $event->city,
                'state' => $event->state,
                'role' => 'monitor',
                'check' => $check
            ]);

        }

        $pdf = Pdf::loadView('certificates.monitor', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }

    function monitor2($id){

        $certificate = Certificate::find($id);

        $data['name'] = $certificate->name;
        $data['cpf'] = $certificate->cpf;
        $data['typeevent'] = $certificate->type;
        $data['subevent'] = $certificate->subevent;
        $data['event'] = $certificate->event;
        $data['dataevent'] = $certificate->dataevent;
        $data['city'] = $certificate->city;
        $data['state'] = $certificate->state;
        $data['check'] = $certificate->check;

        $pdf = Pdf::loadView('certificates.monitor', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }

    function guest($id, $guest){

        $subevent = SubEvent::find($id);
        $guest = Guest::find($guest);
        $event = Event::find($subevent->event_id);

        $data['name'] = $guest->name;
        $data['cpf'] = $guest->cpf;
        $data['typeevent'] = $subevent->type;
        $data['subevent'] = $subevent->name;
        $data['event'] = $event->name;
        $data['dataevent'] = $event->date;
        $data['city'] = $event->city;
        $data['state'] = $event->state;

        $check = md5($guest->name.$guest->cpf.$subevent->type.$subevent->name.$event->name.$event->date.$event->city.$event->state.'guest');

        $data['check'] = $check;

        $search = Certificate::where('check', $check)->get();

        if(count($search) > 0){



        } else {

            Certificate::create([
                'name' => $guest->name,
                'cpf' => $guest->cpf,
                'typeevent' => $subevent->type,
                'subevent' => $subevent->name,
                'event' => $event->name,
                'dataevent' => $event->date,
                'city' => $event->city,
                'state' => $event->state,
                'role' => 'guest',
                'check' => $check
            ]);

        }


        $pdf = Pdf::loadView('certificates.guest', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }

    function guest2($id){

        $certificate = Certificate::find($id);

        $data['name'] = $certificate->name;
        $data['cpf'] = $certificate->cpf;
        $data['typeevent'] = $certificate->type;
        $data['subevent'] = $certificate->subevent;
        $data['event'] = $certificate->event;
        $data['dataevent'] = $certificate->dataevent;
        $data['city'] = $certificate->city;
        $data['state'] = $certificate->state;
        $data['check'] = $certificate->check;

        $pdf = Pdf::loadView('certificates.guest', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }

    function participant2($id){

        $certificate = Certificate::find($id);

        $data['name'] = $certificate->name;
        $data['cpf'] = $certificate->cpf;
        $data['typeevent'] = $certificate->type;
        $data['subevent'] = $certificate->subevent;
        $data['event'] = $certificate->event;
        $data['dataevent'] = $certificate->dataevent;
        $data['city'] = $certificate->city;
        $data['state'] = $certificate->state;
        $data['check'] = $certificate->check;

        $pdf = Pdf::loadView('certificates.participant', $data)->setPaper('a4', 'landscape');
        return $pdf->stream();

    }
}
