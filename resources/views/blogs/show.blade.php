@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Main Post Content (Left Side) -->
        <div class="col-lg-8">
            <h1 class="mb-4 show-title">{{ $post->title }}</h1><br>
            <p class="text-muted paragraph">Published on: {{ $post->created_at->format('M d, Y') }}</p> <br>
            <p class="card-text paragraph">{{ $post->description }}</p>
            <p class="paragraph"><strong class='font'>Category:</strong> {{ $post->category->name }}</p>
            <p class="paragraph"><strong class='font'>Status:</strong> {{ $post->status }}</p>

            <p class="tag paragraph"><strong class='font'>Tags:</strong> 
                @foreach($post->tags as $tag)
                    {{ $tag->tag }}
                @endforeach
            </p>  
        </div>

        <!-- Related Posts (Right Side, Top Corner) -->
        <div class="col-lg-4">
            <div class="card mt-3 mr-5">
                <div class="card-body">
                    <h5 class="card-title font">Related Posts</h5>
                    <ul class="list-unstyled">
                        @foreach ($related_posts as $related_post)
                            <li>
                                <a class='link' href="{{ route('blog.show', ['slug' => $related_post->slug]) }}">
                                    {{ $related_post->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

