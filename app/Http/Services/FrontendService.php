<?php
namespace App\Http\Services;

use App\Models\Post;

use App\Models\Slider;

use App\Models\Menunote;

use App\Models\Menulocation;

class FrontendService{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $nposts = Post::orderBy('id', 'desc')->first();
        $exceptThisPostId = Post::orderBy('id', 'desc')->first()->id;
        $posts = Post::where('id', '!=',$exceptThisPostId)->get();
        return view('user.page.home', compact('sliders', 'nposts', 'posts'));
    }
}
