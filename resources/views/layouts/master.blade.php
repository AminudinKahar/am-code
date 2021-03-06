<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="css/all.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body >
    
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <nav class="navbar navbar-expand-lg navbar-light bg-trans">
              <a class="navbar-brand">
                <img src="img/am_logo.png" width="70" height="30" class="d-inline-block align-top" alt="" onclick="darkMode()">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto menu">
                  <li class="nav-item">
                    <a class="nav-link"  href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="/info">Info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="/work">Work</a>
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
        <div class="container">
          @yield('content')
        </div>
        
        
        <footer class="mastfoot mt-auto text-center">
            <div class="inner par-slideup">
              <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
              <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
              <a href="#"><i class="fab fa-github fa-lg"></i></a>
              <p>This is a Simple Portfolio Dashboard using <a href="https://getbootstrap.com/">Bootstrap</a> and <a href="https://laravel.com/">Laravel 8</a>, by Amin Kahar.</p>
            </div>
            
            
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script type="text/javascript" src="js/app.js"></script>
    <script>
     $(document).ready(function() {

        // Get current page URL
        var url = window.location.pathname;

        // Loop all menu items
        $('.menu li').each(function(){

          // select href
          var href = $(this).find('a').attr('href');

          // Check filename
          if(url == href){

            // Add active class
            $(this).addClass('active');
          }
        });
      });

      function darkMode() {
      var element = document.body;
      element.classList.toggle("dark-mode");
      }
    </script>
  </body>
</html>