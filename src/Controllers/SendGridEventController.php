<?php

namespace Hjmsw\SendGridEventApi\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hjmsw\SendGridEventApi\Models\Event;

class SendGridEventController extends Controller
{
    public function events(Request $request){

        if ($request->has('type')) {
            $events = Event::ofType($request->get('type'));
        } else {
            $events = Event::allTypes();
        }

        if ($request->has('email')) {
            $events->email($request->get('email'));
        }

        if ($request->has('limit')) {
            $events = $events->simplePaginate($request->get('limit'));
        } else {
            $events = $events->get();
        }
        
        return $events->toArray();
    }

    public function processEvents(Request $request) {
        $events_list = json_decode($request->getContent());

        $saved = 0;

        foreach($events_list as $e) {
            $event = new Event();

            $event->email = $e->email;
            $event->smtp_id = $e->{'smtp-id'};
            $event->event = $e->event;
            $event->category = $e->category;
            $event->sg_event_id = $e->sg_event_id;
            $event->sg_message_id = $e->sg_message_id;
            $event->created_at = $e->timestamp;

            if ($event->save()) $saved++;
        }

        return ['saved' => $saved];
    }
}
