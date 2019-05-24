<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rentrace - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>
    <body>
        
            <div class="container">
                <header class="header py-3">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                      <div class="col-4 pt-1">
                        <a href="{{ url('/booking') }}" class="text-decoration-none"><h1>Rent And Race</h1></a>
                      </div>
                      <div class="col-4 text-center">
                          <p><strong>3611 Some Adress Here 927, Some City 20061</strong>
                            Telephone:<strong> +1 (234) 567 89 00</strong></p>
                      </div>
                      <div class="col-4 d-flex justify-content-between align-items-center">
                      <!-- Button to Open the Modal -->
                      Not member yet?
                        <a class="btn btn-primary" href="{{ url('/register') }}">Register</a>
                        <a class="btn btn-primary" href="{{ url('/login') }}">Login</a>
                      </div>
                    </div>
                </header>
              
                <!--HEADER END-->
                <!--NAVBAR-->
                <div class="navbar navbar-expand-lg navbar-dark bg-primary"> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Book a Car</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/result') }}" class="nav-link">Results</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/login') }}" class="nav-link">Insert</a>
                        </li>
                    </ul>
                  </div>
                </div> <!--NAVBAR END-->

              @yield('content')
              
              <footer class="footer bg-secondary text-center container my-3">
                  <p>&copy Ahti 2019</p>
              </footer> <!--FOOTER END-->
              
                <!-- Optional JavaScript -->
                  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
                  </script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
                  </script>
            </div>
        </div>
    </body>
</html>
