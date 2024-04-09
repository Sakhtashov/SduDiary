<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

        <title>SDU Diary</title>

        <link rel="stylesheet" href="{{asset('../css/contacts.css')}}">

        <script>
                function initMap() {
                            map = L.map('map', {
                                center: {
                                    lat: 28.626137,
                                    lng: 79.821603,
                                },
                                zoom: 15
                            });

                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '© OpenStreetMap'
                            }).addTo(map);
                }

                initMap();
            </script>
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
                        <image src ="" alt="auth">

                        |

                        <p>Sign in</p>
                    </div>
                </nav>
            </div>

            <div class = "main">

            <div id="map"></div>
            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

            </div>
    </body>
</html>
