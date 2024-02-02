<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(): View {
         $validator = Validator::make([
            'title'=> 'Randrianaivo'
         ],[
            'title' => 'required|min:8'
         ]);
         dd($validator -> validated());

        return view('blog.index', [
            'posts' => Post::paginate(2)
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
