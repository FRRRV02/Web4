<x-layout>
<main>
    <div class="container">
        <section class="hero-contact text-center py-5">
            <h2>Kontak</h2>
            <p>Hubungi kami untuk pertanyaan atau bantuan apapun yang anda perlukan. Kami siap membantu.</p>
        </section>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ url('/contact') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subjek</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirimkan</button>
        </form>
    </div>
</main>
</x-layout>
