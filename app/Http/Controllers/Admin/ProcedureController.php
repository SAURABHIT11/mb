<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedures = Procedure::where('user_id', auth()->id())->get();
        return view('admin.procedures.index', compact('procedures'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'percentage' => 'required|integer|max:100'
        ]);

        Procedure::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        return back()->with('success','Procedure added');
    }

    public function update(Request $request, Procedure $procedure)
    {
        $procedure->update($request->only('name','percentage'));
        return back()->with('success','Updated successfully');
    }

    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
        return back()->with('success','Deleted');
    }
}
