@include('includes.header')
@include('includes.navbar')

<div class="container mt-5">
    <h1 class="mb-5 text-center text-white">Berita Terbaru</h1>

    <div class="row">
        @if ($news->count() > 0)
            @foreach ($news as $item)
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white h-100 shadow-sm">
                        <img src="{{ asset('images/berita.jpg') }}" class="card-img-top" alt="Berita" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->content, 100) }}...</p>
                            <a href="detail_berita.php?id={{ $item->id }}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-white">Ada berita baru.</p>
        @endif
    </div>
</div>

@include('includes.footer')