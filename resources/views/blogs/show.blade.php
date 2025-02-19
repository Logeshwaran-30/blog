@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div>
        <h2 class="card-title show-title">{{ $post->title }}</h2><br>
        <p class="text-muted paragraph">Published on: {{$post->created_at->format('M d,Y')}}</p> <br>
        <p class="card-text paragraph">{{ $post->description }}</p>
        <p class="paragraph"><strong class='font'>Category:</strong> {{ $post->category->name }}</p>
        <p class="paragraph"><strong class='font'>Status:</strong> {{ $post->status }}</p>

        <p class="tag paragraph"><strong class='font'>Tags:</strong> 
            @foreach($post->tags as $tag)
                {{ $tag->tag }}
            @endforeach
        </p>            
    </div>
@endsection
