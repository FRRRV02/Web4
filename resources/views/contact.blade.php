@include('partials.header')

<main>
    <div class="container">
        <section class="hero-contact text-center py-5">
            <h2>Contact Us</h2>
            <p>Hubungi kami untuk pertanyaan atau bantuan yang Anda butuhkan. Kami di sini untuk membantu.</p>
        </section>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ url('/contact') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</main>

@include('partials.footer')