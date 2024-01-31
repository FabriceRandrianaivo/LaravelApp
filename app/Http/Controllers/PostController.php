<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): Paginator{
        return Post::paginate(25);
    }
    public function article(string $slug, string $id): RedirectResponse | Post{
        $post = Post::findOrFail($id);
        if($post-> slug != $slug){
            return to_route('home.article',[  'id'=> $post-> id ,'slug' => $post-> slug ]);
        }
        return $post;
    }
}
