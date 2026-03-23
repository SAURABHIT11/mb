@extends('layouts.app_new')


@section('content')


    {{-- HERO SECTION saurabh--}}
    @include('sections.hero')

    <div class="divider"></div>

    {{-- PROFILE SECTION --}}
    @include('sections.profile')


    <div class="divider"></div>

    {{-- MEDIA SECTION --}}
    @include('sections.media')

    <div class="divider"></div>

    {{-- BLOG SECTION --}}
    @include('sections.blog')
    <!-- ══════ CONTACT ══════════════════════════════════════════ -->
    <section id="contact">
        <div class="container position-relative">
            <div class="text-center reveal">
                <div class="eyebrow justify-content-center" style="color:rgba(255,255,255,0.45);">Ready to Help</div>
                <h2 class="cta-title">Start Your Journey<br>to Better Health</h2>
                <p class="cta-sub">Expert consultation for complex procedures or a second opinion — Dr. Bhalla brings
                    world-class urological expertise to every case.</p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="#" class="btn-cw"><i class="bi bi-calendar2-check"></i> Book Appointment</a>
                    <a href="#" class="btn-co"><i class="bi bi-telephone"></i> Contact Office</a>
                </div>
            </div>
            <div class="cgrid reveal">
                <div class="ccard">
                    <div class="cico"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="clbl">Location</div>
                    <div class="cval mb-2">
                        Main Urological Centre, Roorkee
                    </div>

                    <a href="https://www.google.com/maps/dir//Dr+Mohit+Bhalla,+Ramnagar,+Roorkee,+Sunhaira,+Uttarakhand+247667/@29.8613694,77.8948258,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390eb5a1d7a56b1d:0x301f0a128a5ce973!2m2!1d77.8717344!2d29.8747022?hl=en-IN&entry=ttu&g_ep=EgoyMDI2MDIyMi4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank" class="btn btn-sm btn-light rounded-pill px-3">
                        <i class="bi bi-map me-1"></i> View on Map
                    </a>
                </div>

                <div class="ccard">
                    <div class="cico"><i class="bi bi-envelope-fill"></i></div>
                    <div class="clbl">Email</div>
                    <div class="cval">contact@drmohitbhalla.com</div>
                </div>
                <div class="ccard">
                    <div class="cico"><i class="bi bi-phone-fill"></i></div>
                    <div class="clbl">Phone</div>
                    <div class="cval">+91 99999999999</div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')



    <script>
        // Navbar scroll
        window.addEventListener('scroll', () => { document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60); });

        // Reveal
        const ro = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); ro.unobserve(e.target); } }), { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => ro.observe(el));

        // Progress bars
        const po = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.querySelectorAll('[data-w]').forEach(b => b.style.width = b.dataset.w + '%'); po.unobserve(e.target); } }), { threshold: 0.3 });
        document.querySelectorAll('.bcard').forEach(c => po.observe(c));

        // Charts
        function initCharts() {
            const gc = '#e2eaf3', lf = { family: "'Outfit',sans-serif", size: 11 };

            new Chart(document.getElementById('radarChart'), {
                type: 'radar',
                data: {
                    labels: ['Surgical Precision', 'Patient Empathy', 'Diagnostics', 'Research', 'Technology'],
                    datasets: [{ data: [95, 100, 90, 85, 92], backgroundColor: 'rgba(8,145,178,0.1)', borderColor: '#0891b2', pointBackgroundColor: '#0891b2', pointBorderColor: '#fff', pointRadius: 5, borderWidth: 2 }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    scales: { r: { angleLines: { color: gc }, grid: { color: gc }, pointLabels: { font: lf, color: '#6b829e' }, ticks: { display: false, max: 100 } } },
                    plugins: { legend: { display: false } }
                }
            });

            new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: ['Endourology', 'Laparoscopy', 'Uro-Oncology', 'Reconstruction', 'General'],
                    datasets: [{ data: [35, 25, 20, 10, 10], backgroundColor: ['#0c3c6e', '#1a5fa8', '#0891b2', '#22d3ee', '#a5f3fc'], borderRadius: 8, borderSkipped: false }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { display: false }, tooltip: { callbacks: { label: c => c.parsed.y + '% of Practice' } } },
                    scales: { y: { beginAtZero: true, grid: { color: gc }, ticks: { display: false } }, x: { grid: { display: false }, ticks: { color: '#6b829e', font: lf } } }
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => { initCharts(); renderMedia(); renderBlog(); });
    </script>
 

@endpush