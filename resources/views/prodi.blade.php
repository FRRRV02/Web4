@include('includes.header')
@include('includes.navbar')

<div class="container mt-5">
    <h1 class="text-center text-white mb-5">Program Studi</h1>

    <div class="row">
        <!-- Teknik Industri -->
        <div class="col-md-6 mb-4">
            <div class="card bg-dark text-white h-100 shadow-sm">
                <img src="assets/images/teknik_industri.jpg" class="card-img-top" alt="Teknik Industri">
                <div class="card-body">
                    <h5 class="card-title">Teknik Industri</h5>
                    <p class="card-text">Program studi yang mengajarkan prinsip-prinsip teknik dan manajemen untuk meningkatkan efisiensi dan efektivitas produksi.</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Informatika -->
        <div class="col-md-6 mb-4">
            <div class="card bg-dark text-white h-100 shadow-sm">
                <img src="assets/images/informatika.jpg" class="card-img-top" alt="Informatika">
                <div class="card-body">
                    <h5 class="card-title">Informatika</h5>
                    <p class="card-text">Program studi yang fokus pada pengembangan perangkat lunak, analisis sistem, dan teknologi komputer untuk memenuhi kebutuhan industri modern.</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')