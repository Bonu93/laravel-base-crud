<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel-base-crud</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Laravel-base-crud</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link 
                    @if (Request::route()->getName() === 'home') active @endif" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link 
                    @if (Request::route()->getName() === 'movies') active @endif" aria-current="page" href="{{route('comics.index')}}">Comics</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
    </header>

    <main class="bg-dark text-light flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-dark text-light">
        <div class="container text-center">
            <h5>Create with &hearts; by Boolean
            </h5>

        </div>
    </footer>
</body>
</html>