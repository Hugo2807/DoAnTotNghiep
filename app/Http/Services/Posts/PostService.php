<?php
namespace App\Http\Services\Posts;

use App\Models\Post;

use App\Models\Slug;

use App\Models\Menunote;
use App\Models\Menulocation;

class PostService{

    // User
    public function index(){
        $posts = Post::orderBy('id', 'ASC')->paginate(5);
        return view('adminshop.post.index', compact('posts'));
    }

    public function postIndex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $threeposts = Post::orderBy('id', 'desc')->limit(3)->get();
        return view('user.page.blogs.post', compact('posts', 'threeposts'));
    }

    public function postDetail($slug)
    {
        $slugName = $slug;
        $slugPost = Slug::where('nameSlug', $slug)->first();
        // dd($slugPost->slugable_id);
        $postDetails = Post::findOrFail($slugPost->slugable_id);
        // dd($postDetails);
        return view('user.page.blogs.postDetail', compact('postDetails','slugPost', 'slugName'));
    }
}
