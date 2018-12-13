@extends('app')

@section('slider')
<div class="container mt-2">
        <div class="row ">
            <div class="col-md-12">
                
            <div id="carouselExampleControls" class="carousel slide text-center " data-ride="carousel" >
                @foreach($myposts as $post)
            <div class="carousel-inner">
                <div class="carousel-item @if($loop->first) active @endif" >
                <img class="d-block w-100" src="{{asset('/storage/'.$post->image)}}" alt="First slide">
                </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
           </div>
        </div>
</div>
@stop

@section('content')
        <h4 class="mt-4">Liste des derniers articles</h4>
        <div class="row">
        
           @foreach($myposts as $post)
            <div class="col-md-3 mt-2">
                <div class="card">
                  <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt="">
                  <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text">{{str_limit($post->excerpt,50)}}</p>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
@stop

@section('javascript')
<script>
$(document).ready(function(){
    $('.carousel').carousel();
})
</script>

@stop