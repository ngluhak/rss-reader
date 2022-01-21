<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="New rss reader for movies recommendations">
    <meta name="keywords" content="rss, reader, movies">
    <meta name="author" content="Nina Gluhak">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>{{ env('APP_NAME', 'nema naziva') }}</title>

    <style>      
      .card:hover {
        box-shadow: 8px 8px 8px rgb(116, 116, 133);
        transform: scale(1.03);
      }

      .card {
        transition: 0.5s;
      }
    </style>
  </head>
  <body>

    <main>

      <nav class="navbar navbar-dark bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand " href="{{ route('dashboard') }}">RSS reader</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body ">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-dark" aria-current="page" href="{{ route('articles.index') }}">Articles</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="{{ route('follows.index') }}">Top Recommenders</a>
                 </li> 
                 <li class="nav-item">
                  <a class="nav-link text-dark" aria-current="page" href="{{ route('sources.index') }}">My Sources</a>
               </li> 
                  <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="{{ route('contact.index') }}">Contact</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="{{ route('about') }}">About</a>
                  </li> 
                  <li class="nav-item">
                    <s><a class="nav-link text-dark disabled" aria-current="page" href="{{ route('gallery') }}">Gallery</a></s>
                  </li>            
                </ul>
                
              </div>
            </div>
          </div>
        </nav>
        <div class="container mt-4">
          @yield('content')
        </div>
    </main>

    <footer class="footer fixed-bottom py-3 bg-dark text-muted text-center">
        <div class="container">
          <span>Copyright by Nina Gluhak</span>
          <br>
          <span>All rights reserved</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>