<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function addEvent(Request $request)
    {
        $eventName = $request->eventName;
        $eventContent = $request->eventContent;
        $eventFooter = $request->eventFooter;
        $cardStyle = $request->cardStyle;
        if(($eventContent != 0) and ($eventName != 0) and ($eventFooter != 0) and ($cardStyle != 0)){
            // Сохранение изображения
            $path = Storage::putFile('public/eventsImg', $request->file('eventImg'));
            $events = new Event();
            $events->img = str_replace('public', 'storage', $path);

            $events->name = $eventName;
            $events->content = $eventContent;
            $events->footer = $eventFooter;
            $events->card_style = $cardStyle;

            $events->save();

            return redirect()->intended('/news');
        }

        return redirect()->intended('/addEvent');

    }

    public function renderEvent()
    {
        $events = Event::query()->orderBy('created_at', 'desc')->get();
        return view('pages.news', ['events' => $events]);
    }
}
