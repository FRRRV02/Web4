<nav class="navbar">
        <div class="logo">
           <img class="logo-img" src="{{url('storage/img/sttc.png')}}" alt="">
        </div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul>
            <li><a href="{{ url('/home')}}">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="{{ url('/prodi')}}">Program Studi</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
