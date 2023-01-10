<?php

use App\Models\SubEvent;
use App\Models\ParticipantSubEvent;
use App\Models\Participant;

function getCertificatesGuest($id){

    $subevents = SubEvent::where('guest1_id', $id)
                            ->orWhere('guest2_id', $id)
                            ->get();

    return $subevents;

}


function getCertificatesMonitor($id){

    $subevents = SubEvent::where('monitor1_id', $id)
                            ->orWhere('monitor2_id', $id)
                            ->get();

    return $subevents;

}

function getCertificatesParticipant($id){

    $subevents = ParticipantSubEvent::where('participant_id', $id)->get();

    return $subevents;

}


function getSubEventName($id){

    $subevent = SubEvent::find($id);

    return $subevent->name;

}


function getMonthPTBR($month){

    switch($month){
        
        case 'Jan':
            return "Janeiro";
            break;
        case 'Feb':
            return "Fevereiro";
            break;
        case 'Mar':
            return "Março";
            break;
        case 'Apr':
            return "Abril";
            break;
        case 'May':
            return "Maio";
            break;
        case 'Jun':
            return "Junho";
            break;
        case 'Jul':
            return "Julho";
            break;
        case 'Aug':
            return "Agosto";
            break;
        case 'Sep':
            return "Setembro";
            break;
        case 'Oct':
            return "Outubro";
            break;
        case 'Nov':
            return "Novembro";
            break;
        case 'Dec':
            return "Dezembro";
            break;

    }

}

