<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SDU Diary</title>

        <link rel="stylesheet" href="{{asset('../css/index.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
            <div class = 'nav'>
                <nav class = 'menu'>
                    <image src = "{{url('/image/logoWhite.png')}}" alt='logo' class="logo">
                    <div class = "center">
                        <input type="text" id="search" placeholder="SEARCH">
                        <div class = "centerDown">
                            <ul>
                                <li class="menu-item">
                                    <a href="#">HOME</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">ABOUT US</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" onclick="window.location.href='{{route('clubs')}}'">CLUBS</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">CONTACT</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">QUOTE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class = 'rightSide'>
                        <image src ="{{url('/image/Photo.png')}}" alt="auth" id="authIcon">

                        <p>Name Surname </p>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" id='showWindow'>
                            Sign in
                        </button>
                    </div>
                </nav>
            </div>

            <div class = "main">
                <h1>SDU DIARY</h1>
            </div>


<div id="popupWindow">
          <div class="content">
              <!-- Ваш контент здесь -->

            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="loginModalLabel">Sign in</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="signForm">
                            <!-- Форма входа -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label for="email">Email</label>
                                <div class="form-group">

                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">

                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                        <button id="showSignup">Sign up</button>
                                <div id="signupForm" style="display: none;">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <label>Email</label><br>

                                    <input type="text" placeholder="Email">
                                    <br><br>
                                    <label>Password</label><br>
                                    <input type="password" placeholder="Password">
                                    <br><br>
                                    <label>Confirm password</label><br>
                                    <input type="password" placeholder="Confirm Password">
                                    <br><br>
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </form>
                                </div>

                    </div>
                </div>
                <button id="closeWindow">Закрыть окно</button>
       </div>
            </div>

                <script>
                   document.getElementById('showWindow').addEventListener('click', function() {
                       document.getElementById('popupWindow').classList.add('active');
                   });

                   document.getElementById('closeWindow').addEventListener('click', function() {
                       document.getElementById('popupWindow').classList.remove('active');

                   });

                   document.getElementById('showSignup').addEventListener('click', function() {
                       document.getElementById('signupForm').style.display = 'block';
                       document.getElementById('signForm').style.display = 'none';
                       document.getElementById('showSignup').style.display = 'none';
                   });
                </script>
    </body>
</html>
