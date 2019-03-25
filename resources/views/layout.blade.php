<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <title>Coins</title>
    <style>
      .is-colected {
        text-decoration: underline;
      }
    </style>
  </head>
  <header>
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
 
  <div class="navbar-brand">
    <a class="navbar-item" href="/coins">
      <p>Moneton<p>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
              
                <div id="navbarBasicExample" class="navbar-menu">
                 


                  <div class="navbar-end">
                      <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="is-grouped navbar-item">
                          
                                <p class="control is-expanded">
                                  <input type="text" class="input" name="q" placeholder="Ieškoti monetos">
                                  
                                </p>
                                <p class="control">
                                  <button type="submit" class="button is-info"> Ieškoti</button>
                                </p>
                              </div>

                            </form>
            
 
                    </div>
                  </div>
            
              </nav>

  </header>
  <body>

    <div class="container" style="margin-top: 1em;">
        @yield('content')

   


    </div>

  </body>
</html>