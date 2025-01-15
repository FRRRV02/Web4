@include('partials.header')

<main>
    <div class="container">
        <!-- Hero Section -->
        <section class="hero-programs text-center py-5">
            <h2>Program Studi</h2>
            <p>Jelajahi program unggulan kami yang dirancang untuk membentuk pemimpin dan inovator masa depan.</p>
        </section>

        <!-- Programs Section -->
        <section class="program-list row gy-4">
            <!-- Program 1 -->
            <div class="program-card col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/industri.jpg') }}" class="card-img-top" alt="Teknik Industri">
                    <div class="card-body">
                        <h3 class="card-title">Teknik Industri</h3>
                        <p class="card-text">
                            Teknik Industri menggabungkan ilmu teknik, manajemen, dan ekonomi untuk meningkatkan efisiensi sistem produksi dan operasi. Cocok bagi Anda yang ingin menjadi problem solver di dunia industri.
                        </p>
                        <a href="/programs/teknik-industri" class="btn btn-primary">Lebih lanjut</a>
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="program-card col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/if.jpg') }}" class="card-img-top" alt="Informatika">
                    <div class="card-body">
                        <h3 class="card-title">Informatika</h3>
                        <p class="card-text">
                            Program Studi Informatika fokus pada pengembangan perangkat lunak, data science, dan kecerdasan buatan. Bergabunglah untuk menjadi inovator teknologi masa depan.
                        </p>
                        <a href="/programs/informatika" class="btn btn-primary">Lebih lanjut</a>
                    </div>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="program-card col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/elektro.jpg') }}" class="card-img-top" alt="Teknik Elektro">
                    <div class="card-body">
                        <h3 class="card-title">Teknik Elektro</h3>
                        <p class="card-text">
                            Teknik Elektro membekali Anda dengan pengetahuan tentang teknologi listrik, energi terbarukan, dan sistem kontrol untuk mempersiapkan karier di dunia teknologi modern.
                        </p>
                        <a href="/programs/teknik-elektro" class="btn btn-primary">Lebih lanjut</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@include('partials.footer')
