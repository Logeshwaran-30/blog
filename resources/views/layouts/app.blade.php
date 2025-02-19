<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('style.css')}}">
    <style>
    .featured-blog {
             font-family: 'Roboto', sans-serif;
             font-size: 32px;
             font-weight: bold;
             color: black !important;
                 }
    .title {
    font-family: 'Arial', sans-serif;
    font-size: 36px;
    font-weight: bold;
    color: white !important;
          }
    .font {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: black !important;
          }
    .paragraph {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    color: black !important;
          }
    .heading {
    font-family: 'Arial', sans-serif;
    font-size: 20px;
    font-weight: bold;
    color: black !important;
          }
    .link {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    color: blue !important;
    }
    .show-title {
    font-family: 'Arial', sans-serif;
    font-size: 36px;
    font-weight: bold;
    color: black !important;
          }
          .tags {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    color: black !important;
          }
          .sub-title {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: white !important;
          }


     body {
           background-color: #cccccc;
           }
</style>
@stack('styles') 
</head>
<body>
<header class="bg-dark text-white p-3 mb-4">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <h1 class="mb-0 title">My Blog</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <form method="get" action="{{ route('blogs.index') }}">
                    <div class="input-group" style="margin-left: 30px; width: 90%; border-radius:20px;  padding: 6px;">
                        <input type="text" name="search" class="form-control paragraph" placeholder="Search..." aria-label="Search" value="{{ request()->input('search') }}" style="border-radius: 25px; border: 1px solid #ccc;">
                    </div>
                </form>
            </div>


                <div class="collapse navbar-collapse sub-title" id="navbarNav">
                    <ul class="navbar-nav ms-4"> 
                        <li class="nav-item ms-4"> 
                            <a class="nav-link" href="/blogs">Featured Blogs</a>
                        </li>

                        <li class="nav-item ms-4"> 
                            <a class="nav-link" href="{{ route('posts.all') }}">All Blogs</a>
                        </li>

                        <li class="nav-item dropdown ms-4"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
         <ul class="dropdown-menu" aria-labelledby="navbarCategory">
                 @foreach ($categories as $category)
                        <li>
                 <a class="dropdown-item font" href="{{ route('blogs.display', ['category' => $category->name]) }}">
                  {{ ucfirst($category->name) }}
                </a>
                         </li>
                @endforeach
        </ul>


                        </li>
                    </ul>
                </div>

        </nav>
    </div>
</header>

    <div class="container my-4">
        @yield('content')
        
    </div>

    <footer class="bg-dark text-white text-center p-3 sub-title">
    <p>&copy; 2025 My-Blog. All rights reserved.</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') 
</body>
</html>
