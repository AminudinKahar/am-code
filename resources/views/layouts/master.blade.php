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
            <nav class="navbar navbar-expand-lg navbar-light bg-trans">
              <a class="navbar-brand">
                <img src="img/am_logo.png" width="70" height="30" class="d-inline-block align-top" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/info">Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/work">Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
            {{-- <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="/">Home</a>
              <a class="nav-link active" href="/info">Info</a>
              <a class="nav-link" href="/work">Work</a>
              <a class="nav-link" href="/contact">Contact</a>
            </nav> --}}
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