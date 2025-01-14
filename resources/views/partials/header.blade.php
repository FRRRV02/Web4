<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'STT Cipasung' }}</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Header Styling */
        header {

            background-color:rgb(40, 131, 78);


            color: white;
            padding: 10px 0;
        }
img{
    display: flex;
    height: 50px;
    margin:0px ;
}
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10%;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }
        .navbar-brand a{
            color: white;
            text-decoration: none;
            font-size: 1,5rem;
            transition: color 0.3s ease;
        }

        .nav-links {
            display: flex;
            gap: 15px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #28a745;
        }

        @media (max-width: 768px) {
            .nav-links {
                flex-direction: column;
                align-items: center;
                display: none;
            }

            .nav-links.show {
                display: flex;
            }

            .menu-toggle {
                display: block;
                background: none;
                border: none;
                color: white;
                font-size: 1.5rem;
                cursor: pointer;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="navbar-brand">
<<<<<<< HEAD
                <img src="{{url('storage/img/sttc.png')}}" alt="">
                <!-- <a href="/">STT Cipasung</a> -->
=======
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo STT Cipasung" class="me-2" style="width: 40px; height: 40px;">
                    <span>STT Cipasung</span>
                </a>
>>>>>>> 5f2d1c02cc3e3bb972fe4099a9ef86aa68eb508c
            </div>
            <nav class="nav-links">
                <a href="/">Beranda</a>
                <a href="/about">Profil</a>
                <a href="/programs">Program</a>
                <a href="/news">Berita</a>
                <a href="/facilities">Fasilitas</a>
                <a href="/contact">Kontak</a>
                <!-- <a href="{{url('/pmb')}}">Pmb</a> -->
            </nav>
            <button class="menu-toggle d-md-none" onclick="toggleMenu()">☰</button>
        </div>
    </header>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }
    </script>