<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SDU Diary</title>

        <link rel="stylesheet" href="{{asset('../css/clubs.css')}}">

         <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
            <div class = 'nav'>
                <nav class = 'menu'>
                    <image src = "{{url('/image/logo.png')}}" alt='logo' class="logo">
                    <div class = "center">
                        <input type="text" id="search">
                        <div class = "centerDown">
                            <ul>
                                <li class="menu-item">
                                    <a href="#">Home</a>
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
                <div class="card">
                    <img src="{{url('/image/image 5.png')}}" alt="Club Image" >
                    <div class="description">
                        <h3>EVENT CLUB</h3>
                        <p>Organization of the Year 2022,2023 <br></p>

                           <p>60+ ивентов в стенах университета <br></p>

                           <p>Welcome Party 2023 с 4000 студентов<br></p>

                           <p>Collabaration c Кайрат Нуртас, Орда, Damelya Sweet, Мади Рымбаев, Райм, Мирас Жугунусов.</p>

                          <p> Подробнее </p>
                        </p>
                    </div>
                </div>

                <div class="card">
                     <img src="{{url('/image/image 6.png')}}" alt="Club Image" >
                     <div class="description">
                         <h3>VISION CLUB</h3>
                         <p>SDU Awards:  Мероприятие года - "Ярмарка Добра"</p>
                           <p> SDU Awards:  Проект года - "Ярмарка Добра"</p>
                            <p>SDU Awards:  Performance of the year - "Шоу теней"</p>
                            <p>SDU Awards:  Media of the year - cover "Stitch"

                            </p>
                            <p> Подробнее </p>
                    </div>
                </div>



            </div>
    </body>
</html>
