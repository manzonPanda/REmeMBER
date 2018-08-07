<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>REmeMBER</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!--Materialize Css -->
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
        {{-- <link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.css"> --}}
        
        <!--Firebase -->
        <script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: "AIzaSyBZw4zCOu7F27f7QUZr5qv0FX3mjJem2N0",
            authDomain: "remember-panda.firebaseapp.com",
            databaseURL: "https://remember-panda.firebaseio.com",
            projectId: "remember-panda",
            storageBucket: "remember-panda.appspot.com",
            messagingSenderId: "692177657685"
        };
        firebase.initializeApp(config);
        </script>
    </head>
    <body>
        <div class="container">
            <h1 class="blue center white-text">REmeMBER</h1>
            <div id="app">
            </div>
            {{-- <div id="footer">

            </div> --}}
            {{-- <footer class="page-footer">
                    <div class="container">
                      <div class="row">
                        <div class="col l6 s12">
                          <h5 class="white-text">Footer Content</h5>
                          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                          <h5 class="white-text">Links</h5>
                          <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer-copyright">
                      <div class="container">
                      © 2014 Copyright Text
                      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                      </div>
                    </div>
            </footer> --}}
        </div>

        <script src="/js/app.js"></script>
        <script src="{{asset('js/materialize.min.js')}}"></script>

        <script>
            $(document).ready(function(){
                $('.modal').modal();
            });
        </script>
    </body>
</html>
