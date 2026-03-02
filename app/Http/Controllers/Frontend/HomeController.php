<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;

class HomeController extends Controller
{


    public function index()
    {
        $categories = Category::where('status', 1)
            ->orderBy('sort_order')
            ->take(8)
            ->get();

        $latestContents = Content::with(['category', 'subCategory'])
            ->where('status', 1)
            ->latest()
            ->take(9)
            ->get();

        // ✅ Social Media
        $socialMedia = Content::with(['files', 'category'])
            ->where('type', 'social_media')
            ->where('status', 1)
            ->latest()
            ->take(12)
            ->get();

        // ✅ PROFILE CMS DATA (Logged-in user or specific doctor)
        $userId = 1; // If multi-doctor

        // If public doctor profile, replace above with:
        // $userId = 1;  // default doctor id

        $profile = \App\Models\Profile::where('user_id', $userId)->first();

        $procedures = \App\Models\Procedure::where('user_id', $userId)->get();

        $timelines = \App\Models\Timeline::where('user_id', $userId)
            ->orderBy('sort_order')
            ->get();

        $specializations = \App\Models\Specialization::where('user_id', $userId)->get();

        $awards = \App\Models\Award::where('user_id', $userId)
            ->orderBy('sort_order')
            ->get();


        $blogs = Content::with(['category', 'files'])
            ->where('type', 'blog')
            ->where('status', 1)
            ->latest()
            ->take(6)
            ->get();

        // ✅ Stats
        $stats = [
            'worksheets' => Content::where('type', 'worksheet')->where('status', 1)->count(),
            'coloring' => Content::where('type', 'coloring_page')->where('status', 1)->count(),
            'books' => Content::where('type', 'coloring_book')->where('status', 1)->count(),
            'downloads' => Content::sum('download_count'),
        ];

        return view('home', compact(
            'categories',
            'latestContents',
            'socialMedia',
            'stats',
            'profile',
            'procedures',
            'timelines',
            'specializations',
            'awards',
            'blogs'
        ));
    }
    public function showBlog($id)
    {
        $blog = Content::with(['files', 'category'])
            ->where('type', 'blog')
            ->where('status', 1)
            ->findOrFail($id);

        return response()->json([
            'title' => $blog->title,
            'description' => $blog->description,
            'date' => $blog->created_at->format('M d, Y'),
            'category' => optional($blog->category)->name,
            'media' => $blog->files->map(function ($file) {
                return [
                    'type' => $file->file_type,
                    'url' => asset('storage/' . $file->file_path),
                ];
            })
        ]);
    }




    // public function index()
    // {
    //     $categories = Category::where('status', 1)
    //         ->orderBy('sort_order')
    //         ->take(8)
    //         ->get();

    //     $latestContents = Content::with(['category', 'subCategory'])
    //         ->where('status', 1)
    //         ->latest()
    //         ->take(9)
    //         ->get();

    //     $stats = [
    //         'worksheets' => Content::where('type', 'worksheet')->where('status', 1)->count(),
    //         'coloring'   => Content::where('type', 'coloring_page')->where('status', 1)->count(),
    //         'books'      => Content::where('type', 'coloring_book')->where('status', 1)->count(),
    //         'downloads'  => Content::sum('download_count'), // column must exist
    //     ];

    //     return view('home', compact('categories', 'latestContents', 'stats'));
    // }
}
