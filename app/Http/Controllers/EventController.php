<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
	
    public function index()
    {
		//
        return Event::all(); // returns JSON by default
    }

    public function update(Request $request, Event $event)
    {
        /* $event->update($request->only(['title', 'start', 'end']));
        return response()->json(['success' => true]); */
		$event->update([
			'title' => $request->title,
			'start' => Carbon::parse($request->start)->format('Y-m-d H:i:s'),
			'end'   => $request->end ? Carbon::parse($request->end)->format('Y-m-d H:i:s') : null,
		]);

		return response()->json(['success' => true]);
    }
	
	

    public function edit(Request $request, Event $event)
    {
        /* $event->update($request->only(['title', 'start', 'end']));
        return response()->json(['success' => true]); */
		$event->update([
			'title' => $request->title,
			'start' => Carbon::parse($request->start)->format('Y-m-d H:i:s'),
			'end'   => $request->end ? Carbon::parse($request->end)->format('Y-m-d H:i:s') : null,
		]);

		return response()->json(['success' => true]);
    }

	public function store(Request $request)
	{
		$event = Event::create([
			'title' => $request->title,
			'start' => $request->start,
			'end'   => $request->end,
		]);

		return response()->json($event);
	}

}
