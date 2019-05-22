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

        <!-- Styles -->
        <!--<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>-->
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Register</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>
              
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <!--Modal Header-->
                              <div class="modal-header">
                                
                              </div>  
                              <!--
                              <h1>Login</h1>
                                <form action="" method="post">
                                  Login: <input type="text" name="login"><br>
                                  Password: <input type="password" name="pass"><br>
                                  <input type="submit" value="Logi sisse">
                                </form>
                                -->
                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="d-flex justify-content-center ">
                                  <form action="" method="post" class="form-signin">
                                    <label for="inputEmail" class="sr-only">Email address</label>
                                    <input type="email" name="login" id="inputEmail" class="form-control" placeholder="" required autofocus><br>
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="" required><br>
                                    <div class="checkbox mb-3">
                                      <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                      </label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                                  </form>
                                </div>
                              </div>
                              <!-- Modal Footer -->
                              <div class="modal-footer">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                                              
                            </div>
                          </div>
                        </div>
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
                            <a href="{{ url('/booking') }}" class="nav-link">Book a Car</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/result') }}" class="nav-link">Results</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/edit') }}" class="nav-link">Insert</a>
                        </li>
                    </ul>
                  </div>
                </div> <!--NAVBAR END-->

              @yield('content')
              
              <footer class="footer bg-secondary text-center fixed-bottom container mb-2">
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
