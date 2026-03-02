<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller

{
    
    
    public function cms()
{
    $profile = Profile::firstOrCreate([
        'user_id' => auth()->id()
    ]);

    $procedures = auth()->user()->procedures;
    $timelines = auth()->user()->timelines;
    $specializations = auth()->user()->specializations;
    $awards = auth()->user()->awards;

    return view('admin.profile-cms', compact(
        'profile',
        'procedures',
        'timelines',
        'specializations',
        'awards'
    ));
}

    public function edit()
    {
        $profile = Profile::firstOrCreate(
            ['user_id' => auth()->id()]
        );

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'total_surgeries' => 'required|integer',
            'years_experience' => 'required|integer',
            'success_rate' => 'required|integer|max:100',
            'description'      => 'nullable|string',                
        ]);

        Profile::updateOrCreate(
            ['user_id' => auth()->id()],
            $request->only('total_surgeries','years_experience','success_rate','description')
        );

        return back()->with('success', 'Profile updated successfully');
    }
}
