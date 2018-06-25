<?php

namespace Hjmsw\SendGridEventApi;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class SendGridEventController extends Controller
{
    public function events(){
        return response()->json(Event::all()->toArray());
    }

    public function processEvents(Request $request) {
        $events_list = json_decode($request->getContent());

        foreach($events_list as $e) {
            $event = new Event();

            $event->email = $e->email;
            $event->smtp_id = $e->{'smtp-id'};
            $event->event = $e->event;
            $event->category = $e->category;
            $event->sg_event_id = $e->sg_event_id;
            $event->sg_message_id = $e->sg_message_id;
            $event->created_at = $e->timestamp;

            $event->save();
        }

        return response()->json(1);

    }




}
