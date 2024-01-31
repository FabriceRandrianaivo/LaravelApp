@extends('blog.base')

@section('title','Acceuil du blog')
    
@section('content')
    <h1>Ma premiere page</h1>
    @foreach($posts as $post)
        <article>
            <h2>{{$post-> title}}</h2>
            <p>
                {{$post -> content}}
            </p>
            <p>
                <a href="{{route('home.article',['slug' => $post-> slug, 'id' => $post -> id])}}", class="btn btn-primary">Suivant</a>
            </p>
            <!--p>
                {{$post -> id,}}
                <br>
                {{$post -> slug,}}      
                <br>
b            </p -->
        </article>
        
    @endforeach
    {{$posts->links()}}

@endsection
   
