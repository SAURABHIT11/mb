<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;

class AwardController extends Controller
{
    public function index()
{
    $awards = Award::where('user_id', auth()->id())
                ->orderBy('sort_order')
                ->get();

    return view('admin.awards.index', compact('awards'));
}

public function store(Request $request)
{
    Award::create([
        'user_id' => auth()->id(),
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'sort_order' => $request->sort_order ?? 0,
    ]);

    return back()->with('success','Award added');
}

public function destroy(Award $award)
{
    $award->delete();
    return back()->with('success','Deleted');
}

}
