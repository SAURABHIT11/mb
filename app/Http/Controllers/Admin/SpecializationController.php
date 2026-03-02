<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialization;

class SpecializationController extends Controller
{
  public function index()
{
    $specializations = Specialization::where('user_id', auth()->id())->get();
    return view('admin.specializations.index', compact('specializations'));
}

public function store(Request $request)
{
    Specialization::create([
        'user_id' => auth()->id(),
        'name' => $request->name,
    ]);

    return back()->with('success','Added');
}

public function destroy(Specialization $specialization)
{
    $specialization->delete();
    return back()->with('success','Deleted');
}

}
