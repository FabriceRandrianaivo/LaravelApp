<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(BlogFilterRequest $request): View {
        dd($request -> validated());
        /** Test d'ajout de donner  */
        /* 
        $post = new Post();
        $post -> title = 'nouvelle objet 3';
        $post -> slug = 'nouvelle-objet-3';
        $post-> content = 'contenue n.3';
        $post -> save();
        dd($post);*/

        /**Test de validation de contenu des champs etapplication des constraint */
        /*$validator = Validator::make([
            'title'=> 'Randrianaivo',
            'content' => 'mon contenue',
         ],[
            'title' => ['unique:posts'] //[Rule::unique('posts')->ignore(1)]//['required','min:8'] //'required|min:8'
         ]);
        /* dd($validator -> validated()); //=//errors() / Fails() /* creation d'une une request personnalisée => php artisan make : request */

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
