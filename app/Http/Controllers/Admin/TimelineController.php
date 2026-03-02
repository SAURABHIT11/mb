<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{
   public function index()
{
    $timelines = Timeline::where('user_id', auth()->id())->orderBy('sort_order')->get();
    return view('admin.timelines.index', compact('timelines'));
}

public function store(Request $request)
{
    Timeline::create([
        'user_id' => auth()->id(),
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'year_range' => $request->year_range,
        'color' => $request->color,
        'sort_order' => $request->sort_order ?? 0,
    ]);

    return back()->with('success','Timeline added');
}

public function update(Request $request, Timeline $timeline)
{
    $timeline->update($request->all());
    return back()->with('success','Updated');
}

public function destroy(Timeline $timeline)
{
    $timeline->delete();
    return back()->with('success','Deleted');
}

}
