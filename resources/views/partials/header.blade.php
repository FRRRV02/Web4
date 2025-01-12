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
            background-color: #006636;
            color: white;
            padding: 10px 0;
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
                <a href="/">STT Cipasung</a>
            </div>
            <nav class="nav-links">
                <a href="/">Home</a>
                <a href="/about">About Us</a>
                <a href="/programs">Programs</a>
                <a href="/news">News</a>
                <a href="/facilities">Facilities</a>
                <a href="/contact">Contact</a>
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