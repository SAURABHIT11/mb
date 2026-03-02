<!-- ══════ BLOG ═════════════════════════════════════════════ -->
<section id="blog">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-6 text-center reveal">
                <div class="eyebrow justify-content-center">Knowledge Centre</div>
                <h2 class="sec-title">Urology Insights</h2>
                <p class="sec-desc">Educational articles and clinical commentary for patients and medical peers.</p>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5 reveal">
            <button class="fbtn active" data-f="all">All Posts</button>
            <button class="fbtn" data-f="patient">Patient Education</button>
            <button class="fbtn" data-f="clinical">Clinical Cases</button>
            <button class="fbtn" data-f="tech">Technology</button>
        </div>
        <div class="row g-4 reveal">
            @foreach($blogs as $blog)
                @php
                    $file = $blog->files->first();
                @endphp

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">

                        {{-- Thumbnail --}}
                        <div class="blog-thumb" style="background:#f0f7ff;">

                            @if($file)
                                <img src="{{ asset('storage/' . $file->file_path) }}"
                                    style="width:100%; height:100%; object-fit:cover;">
                            @else
                                📝
                            @endif
                        </div>

                        <div class="blog-body">

                            {{-- Category --}}
                            <span class="blog-badge">
                                {{ optional($blog->category)->name ?? 'General' }}
                            </span>

                            {{-- Date --}}
                            <div class="blog-date">
                                {{ $blog->created_at->format('M d, Y') }}
                            </div>

                            {{-- Title --}}
                            <h3 class="blog-title">
                                {{ $blog->title }}
                            </h3>

                            {{-- Short Description --}}
                            <p class="blog-snip">
                                {{ \Illuminate\Support\Str::limit($blog->description, 120) }}
                            </p>

                            {{-- Read More --}}
                            <a href="javascript:void(0);" onclick="openBlog('{{ $blog->id }}')" class="blog-link">
                                Read Article <i class="bi bi-arrow-right"></i>
                            </a>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Blog Modal -->
<!-- Modern Blog Modal -->
<div class="modal fade" id="blogModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

            <!-- Header -->
            <div class="modal-header border-0 px-4 pt-4 pb-2">
                <div>
                    <div id="blogCategory" class="text-uppercase small fw-semibold text-primary mb-1"
                        style="letter-spacing:1px;"></div>

                    <h4 class="modal-title fw-bold" id="blogModalTitle"
                        style="font-family:'Cormorant Garamond', serif;"></h4>

                    <div class="text-muted small mt-1" id="blogMeta"></div>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <div class="modal-body px-4 pb-4">

                <!-- Featured Media -->
                <div id="blogMedia" class="mb-4 rounded-4 overflow-hidden"></div>

                <!-- Content -->
                <div id="blogContent" class="blog-content" style="line-height:1.9; font-size:1rem;"></div>

            </div>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        function openBlog(id) {
            fetch("{{ url('blog') }}/" + id)
                .then(response => response.json())
                .then(data => {

                    document.getElementById('blogModalTitle').innerText = data.title;
                    document.getElementById('blogMeta').innerText =
                        data.category + ' • ' + data.date;

                    document.getElementById('blogContent').innerHTML = data.description;

                    let mediaHtml = '';

                    data.media.forEach(m => {

                        if (m.type === 'image') {
                            mediaHtml += `<img src="${m.url}"
                                              class="img-fluid mb-3 rounded">`;
                        }

                        if (m.type === 'video') {
                            mediaHtml += `
                                <video controls class="w-100 mb-3 rounded">
                                    <source src="${m.url}">
                                </video>
                            `;
                        }

                    });

                    document.getElementById('blogMedia').innerHTML = mediaHtml;

                    new bootstrap.Modal(document.getElementById('blogModal')).show();
                });
        }
    </script>
@endpush