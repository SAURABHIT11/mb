   <!-- ══════ MEDIA ════════════════════════════════════════════ -->
    <section id="media">
        <div class="container">
            <div class="row justify-content-between align-items-end mb-5 g-4">
                <div class="col-lg-5 reveal">
                    <div class="eyebrow">Social & Media Hub</div>
                    <h2 class="sec-title">Latest Updates</h2>
                    <p class="sec-desc">Surgical tips, health campaigns & milestones from Dr. Bhalla's channels.</p>
                </div>
                <div class="col-lg-6 reveal">
                    <div class="mf-bar justify-content-lg-end">
                        <button class="mf-btn active" data-mf="all">All</button>
                        <button class="mf-btn" data-mf="video">Video</button>
                        <button class="mf-btn" data-mf="image">Photo</button>
                        <button class="mf-btn" data-mf="awareness">Awareness</button>
                    </div>
                </div>
            </div>
            <div class="mgrid reveal">

                @foreach($socialMedia as $content)

                    @php
                        $file = $content->files->first();
                    @endphp

                    @if($file)

                        <div class="mcard" data-type="{{ $file->file_type }}"
                            data-category="{{ optional($content->category)->name }}">

                            <div class="mthumb" style="padding:0">

                                @if($file->file_type === 'video')
                                    <video width="100%" height="100%" style="object-fit:cover" preload="metadata">
                                        <source src="{{ asset('storage/' . $file->file_path) }}" type="video/mp4">
                                    </video>
                                @else
                                    <img src="{{ asset('storage/' . $file->file_path) }}"
                                        style="width:100%;height:100%;object-fit:cover" loading="lazy">
                                @endif

                            </div>

                            <span class="mbadge">
                                {{ $file->file_type === 'video' ? '▶ Video' : '📸 Photo' }}
                            </span>

                            <div class="moverlay">

                                <div class="mcat">
                                    {{ optional($content->category)->name ?? 'GENERAL' }}
                                </div>

                                <div class="mtitle">
                                    {{ $content->title }}
                                </div>

                                <div class="mmeta">
                                    <span>👁 {{ $content->download_count ?? 0 }}</span>
                                    <span>{{ $content->created_at->diffForHumans() }}</span>
                                </div>

                            </div>

                        </div>

                    @endif

                @endforeach

            </div>

            <div class="text-center mt-5 reveal">
                <a href="#" class="btn-sec"><i class="bi bi-instagram"></i> View Full Instagram Feed <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>
 

    