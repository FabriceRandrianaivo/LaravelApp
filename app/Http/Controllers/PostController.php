<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View {
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }
    public function article(string $slug, string $id): RedirectResponse | View{
        $post = Post::find($id);
        if($post-> slug != $slug){
            return to_route('home.article',[  'id'=> $post-> id ,'slug' => $post-> slug ]);
        }
        return view('blog.article', [
            'post' => $post
        ]);
    }
}
