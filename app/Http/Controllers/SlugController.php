<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\Slug;

use Illuminate\Http\Request;

use App\Http\Services\Posts\PostService;

class SlugController extends Controller
{
    protected $posts;

    public function __construct(PostService $posts){
        $this->posts = $posts;
    }

    public function slug($slug, Request $request){
        $type = Slug::where('nameSlug', $slug)->first();
        if(isset($type->slugable_type)){
            switch ($type->slugable_type) {
                case Post::class:
                    // Hiển thị trang chi tiết bài viết
                    $detail = $this->posts->postDetail($slug);
                    return $detail;
                    break;
                
                default:
                    dd('default');
                    break;
            }
        }
        else{
            return redirect()->route('index');
        }
    }
}
