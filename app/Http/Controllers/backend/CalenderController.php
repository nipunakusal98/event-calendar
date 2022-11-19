<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\carbon;

class CalenderController extends Controller
{
    public function view()
    {
        $event = new Event;

        $event->name = 'A new event';
        $event->description = 'Event description';
        $event->startDateTime = Carbon::now();
        $event->endDateTime = Carbon::now()->addHour();
        $event->addAttendee([
            'email' => 'nipunakusal98@gmail.com',
            'name' => 'John Doe',
            'comment' => 'Lorum ipsum',
        ]);
        $event->addAttendee(['email' => 'nipuna.suraweera98@gmail.com']);

        $event->save();
        return view('Backend.Calender');
    }

}
