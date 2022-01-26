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
<body>
    <header>
        <h1>Laravel-base-crud</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <h2>Footer</h2>
    </footer>
</body>
</html>