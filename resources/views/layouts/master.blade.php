<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body class="text-center">
    
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column bg-dark">
        <header class="masthead mb-auto">
          <div class="inner">
            <img class="logo" src="img/am_logo.png">
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="/">Home</a>
              <a class="nav-link active" href="/info">Info</a>
              <a class="nav-link" href="/work">Work</a>
              <a class="nav-link" href="/contact">Contact</a>
            </nav>
          </div>
        </header>

        @yield('content')
        
        <footer class="mastfoot mt-auto">
            <div class="inner par-slideup">
                <p>This is a Simple Portfolio Dashboard using <a href="https://getbootstrap.com/">Bootstrap</a> and <a href="https://laravel.com/">Laravel 8</a>, by Amin Kahar.</p>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>