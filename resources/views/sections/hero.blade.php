<!-- ══════ HERO ════════════════════════════════════════════ -->
<section id="hero">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>

    <div class="container position-relative">
        <div class="row align-items-center g-5">

            <div class="col-lg-7 order-2 order-lg-1">
                <div class="hero-eyebrow"><span class="live-dot"></span> Top Rated · Urologist & Surgeon · India
                </div>
                <h1 class="hero-title">
                    Advanced Urology.<br>
                    <span class="italic">Compassionate Care.</span>
                </h1>
                <p class="hero-desc">
                    {{ $profile->description ?? 'World-class urological care with compassion and precision.' }}
                </p>

                <div class="d-flex flex-wrap gap-3 mb-1">
                    <a href="#profile" class="btn-prim">Explore Profile <i class="bi bi-arrow-down"></i></a>
                    <a href="#media" class="btn-sec"><i class="bi bi-play-circle-fill" style="color:var(--teal)"></i>
                        Watch Media</a>
                </div>
                <div class="chip-row">
                    <span class="chip"><i class="bi bi-mortarboard-fill"></i> MCh Urology</span>
                    <span class="chip"><i class="bi bi-heart-pulse-fill"></i> Surgical Expert</span>
                    <span class="chip"><i class="bi bi-microscope"></i> Researcher</span>
                    <span class="chip"><i class="bi bi-trophy-fill"></i> Award-Winning</span>
                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 d-flex justify-content-center">
                <div class="photo-frame">
                    <div class="photo-card">
                        <img src="{{ asset('image/dr-mohit-bhalla.jpeg') }}"
                            style="width:100%;height:450px;object-fit:cover">
                        <div class="photo-bar">
                            <div class="stat-row">
                                <div class="stat-cell"><span class="stat-n">98%</span><span
                                        class="stat-l">Success</span></div>
                                <div class="stat-cell"><span class="stat-n">5k+</span><span
                                        class="stat-l">Patients</span></div>
                                <div class="stat-cell"><span class="stat-n">12+</span><span class="stat-l">Yrs
                                        Exp</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="float-badge">⭐ Best Surgeon 2025</div>
                </div>
            </div>

        </div>
    </div>
</section>