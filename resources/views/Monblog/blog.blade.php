@extends('app')

@section('content')
<h2><u>Liste des articles publiés:</u></h2>
<div class="row">    
    <div class="col-md-8">
        @foreach($myposts as $post)
        <div class="card text-center">

          <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt="">
          <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">{{str_limit($post->excerpt,100)}}</p>
            <a href="{{url('/blog/'.$post->category->id)}}"><span class="badge badge-info">{{$post->category->name}}</span></a>
        </div>
        </div>
        
        @endforeach
    </div>
    
    <div class="col-md-4">
    <h4>Liste des catégories:</h4>
        <ul class="list-group">
            <li class="list-group-item @if(!$id) active @endif" ><a class="list-group-item-action" href="{{url('/blog')}}">Toutes les catégories</a></li>
            @foreach($mycategory as $category)
                
                <li class="list-group-item d-flex justify-content-between align-items-center @if($category->id == $id) active @endif">
                    <a class="list-group-item-action" href="{{url('/blog/'.$category->id)}}">{{$category->name}}</a>
                    <span class="badge badge-primary badge-pill">{{$category->posts->count()}}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="pagination justify-content-center">
    {{$myposts->links()}}
</div>
@stop