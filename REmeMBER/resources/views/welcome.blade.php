<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>REmeMBER</title>
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        
        <!--FirebaseUI-->
        <script src="https://cdn.firebase.com/libs/firebaseui/3.2.0/firebaseui.js"></script>
        <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.2.0/firebaseui.css" />

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!--Materialize Css -->
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
        {{-- <link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.css"> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/mycss.css')}}"> --}}
        

        <link rel="stylesheet" href="">
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

            // FirebaseUI config.
            var uiConfig = {
                // signInSuccessUrl: '<url-to-redirect-to-on-success>',
                signInSuccessUrl: 'home',
                signInOptions: [
                // Leave the lines as is for the providers you want to offer your users.
                firebase.auth.GoogleAuthProvider.PROVIDER_ID,
                // firebase.auth.FacebookAuthProvider.PROVIDER_ID,
                // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
                // firebase.auth.GithubAuthProvider.PROVIDER_ID,
                firebase.auth.EmailAuthProvider.PROVIDER_ID,
                {provider:firebase.auth.PhoneAuthProvider.PROVIDER_ID,
                    defaultCountry: 'PH'
                }
                
                // firebaseui.auth.AnonymousAuthProvider.PROVIDER_ID
                ],
                // Terms of service url.
                tosUrl: '<your-tos-url>',
                // Privacy policy url.
                privacyPolicyUrl: '<your-privacy-policy-url>',
                // 'callbacks': {
                //     'signInSuccess': function(currentUser, credential, redirectUrl) {
                //     return true;
                // }
            };
        
            // Initialize the FirebaseUI Widget using Firebase.
            var ui = new firebaseui.auth.AuthUI(firebase.auth());
            // The start method will wait until the DOM is loaded.
            ui.start('#firebaseui-auth-container', uiConfig);
        </script>

    </head>
    <body style="background-color: #06023E">
            <div style="margin-top:5%" class="container">
                <h4 class="white-text center-align flow-text">Welcome </h4>
                <h4 class="white-text center-align flow-text">to </h4>
                <h2 class="orange-text text- center-align hoverable z-depth-1">REMEMBER</h2>
                <div class="btn-group center" style="margin-top:10%">
                    <button class="btn orange darken-4 waves-effect waves-light btn hoverable pulse">Log in</button>
                    <button class="btn orange darken-4 waves-effect waves-light btn hoverable">Sign up</button>
                </div>
            </div>

            {{-- <div id="app">
            </div> --}}
            {{-- <div >
                <input type="email" placeholder="Email" id="textEmail">
                <input type="password" placeholder="Password" id="textPassword">
                <button id="loginButton">Log in</button>
                <button id="signUpButton">Sign up</button>
                <button id="logoutButton" class="btn hide">Log out</button>
            </div> --}}
            {{-- <div id="firebaseui-auth-container">

            </div> --}}


        <script src="/js/app.js"></script>
        <script src="{{asset('js/materialize.min.js')}}"></script>

        <script>
            const textEmail = document.getElementById("textEmail");
            const textPassword = document.getElementById("textPassword");
            const btnLogin = document.getElementById("loginButton");
            const btnLogout = document.getElementById("logoutButton");
            const btnSignUp = document.getElementById("signUpButton");

            btnLogin.addEventListener('click', e => {
               const email = textEmail.value;
               const pass = textPassword.value;
               const auth = firebase.auth();
               const promise = auth.signInWithEmailAndPassword(email,pass);
               promise.catch(e => console.log(e.message));  
            });

            btnSignUp.addEventListener('click', e =>{
            const email = textEmail.value;
               const pass = textPassword.value;
               const auth = firebase.auth();
               const promise = auth.createUserWithEmailAndPassword(email,pass);
               promise.catch(e => console.log(e.message));  

            });

            btnLogout.addEventListener('click', e =>{
                firebase.auth().signOut();
            });

            //realtime auth listener
            firebase.auth().onAuthStateChanged(firebaseUser => {
                if(firebaseUser){
                    console.log(firebaseUser);
                    btnLogout.classList.remove('hide');
                    btnLogin.classList.add('hide');
                    btnSignUp.classList.add('hide');
                }else{
                    console.log("notlogged in");
                    btnLogout.classList.add('hide');
                    btnLogin.classList.remove('hide');
                    btnSignUp.classList.remove('hide');
                }
            });

            $(document).ready(function(){
                $('.modal').modal();
            });
        </script>
    </body>
</html>
