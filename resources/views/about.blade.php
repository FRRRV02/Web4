@include('partials.header')

<main>
    <div class="container">
        <!-- Hero Section -->
        <section class="hero-programs text-center py-5">
            <h2>About My Campus</h2>
            <p>Empowering students with quality education since its establishment. Discover our values and mission.</p>
        </section>

        <!-- Content Sections -->
        <div class="cards">
            <div class="card">
                <img src="/images/campus-history.jpg" alt="Campus History">
                <h4>Our History</h4>
                <p>My Campus was founded in 1980 with a vision to become a leading institution in education and research.</p>
            </div>

            <div class="card">
                <h4>Mission</h4>
                <p>To provide high-quality education, foster innovation, and create global leaders who contribute to society.</p>
            </div>

            <div class="card">
                <h4>Vision</h4>
                <p>To be a world-class university recognized for excellence in education, research, and community engagement.</p>
            </div>
        </div>

        <div class="values">
            <h3>Our Core Values</h3>
            <ul>
                <li><strong>Excellence:</strong> Striving for the highest quality in everything we do.</li>
                <li><strong>Integrity:</strong> Upholding honesty and ethical behavior.</li>
                <li><strong>Innovation:</strong> Encouraging creativity and new ideas.</li>
                <li><strong>Inclusion:</strong> Embracing diversity and creating an inclusive environment.</li>
            </ul>
        </div>
    </div>
</main>

@include('partials.footer')