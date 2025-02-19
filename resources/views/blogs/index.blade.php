@extends('layouts.app')

@section('title', 'Featured Blog Posts')

@section('content')
   <h2 class="text-center mb-4 featured-blog">Featured Blogs</h2>

    <div class="row">
        @foreach($featuredPosts as $post)
        <div class="col-md-4">
           <div class="card mb-4 bg-gray-600">
              <div class="card-body">
                <h5 class="card-title heading">{{ $post->title }}</h5>
                   <p class="card-text paragraph">{{ Str::limit($post->short_description, 40) }}</p>
                   <a class='link' href="/blog/{{ Str::slug($post->title) }}">Read More</a>
                   <a class="text-decoration-none text-dark fw-bold font" 
                         href="{{ route('blogs.display', ['category' => $post->category->name]) }}" 
                         style="margin-left: 100px;">
                             {{ $post->category->name }}
                         </a>

              </div>
           </div>
        </div>
        @endforeach
    </div>

    <div class="col-12 my-3">
        <nav aria-label="Page navigation">
            {{$featuredPosts->links('pagination::bootstrap-5')}}
        </nav>
    </div>
@endsection
