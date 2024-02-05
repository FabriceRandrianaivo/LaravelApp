<!--/**Importation de la structure de base du site et mise à jours des donnée head*/-->
@extends('blog.base')
@section('title','Acceuil du blog')

<!--/**Generation du contenue de la base section content */ -->
@section('content')
    <h1>Listes des objets</h1>
    @foreach($posts as $post)
        <article>
            <h2>{{$post-> title}}</h2>
            <p>
                {{$post -> content}}
            </p>
            <p>
                <a href="{{route('home.article',['slug' => $post-> slug, 'id' => $post -> id])}}", class="btn btn-primary">Lire la suite</a>
            </p>
            <!--p>
                {{$post -> id,}}
                <br>
                {{$post -> slug,}}      
                <br>
b            </p -->
            <p>Status: {{($post ->title)? "En stock" : "No disponible"}} </p>
        </article>
        
    @endforeach
    {{$posts->links()}}

@endsection
   
