  <section id="profile">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center reveal">
                    <div class="eyebrow justify-content-center">Professional Dashboard</div>
                    <h2 class="sec-title">Expertise at a Glance</h2>
                    <p class="sec-desc">
                        A clear, data-driven overview of clinical competencies,
                        credentials, and career milestones.
                    </p>
                </div>
            </div>

            {{-- ================= ROW 1 ================= --}}
            <div class="bento reveal">

                {{-- SURGERY CARD --}}
                <div class="bcard sky b3">
                    <div class="blbl">
                        <i class="bi bi-activity me-1"></i>Surgeries
                    </div>

                    <div class="big-n teal">
                        {{ $profile->total_surgeries ?? 0 }}+
                    </div>

                    <div class="num-s">Procedures Performed</div>

                    <div class="mt-4">
                        @foreach($procedures as $procedure)
                            <div class="prg-item">
                                <div class="prg-head">
                                    <span class="prg-n">{{ $procedure->name }}</span>
                                    <span class="prg-p">{{ $procedure->percentage }}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar pb-navy" style="width:0" data-w="{{ $procedure->percentage }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- RADAR CHART --}}
                <div class="bcard b5">
                    <div class="blbl">
                        <i class="bi bi-radar me-1"></i>Competency Radar
                    </div>
                    <div class="btitl">Clinical Proficiency Map</div>
                    <div class="chart-box">
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>

                {{-- TIMELINE --}}
                <div class="bcard b4">
                    <div class="blbl">
                        <i class="bi bi-clock-history me-1"></i>Career Path
                    </div>
                    <div class="btitl">Academic Journey</div>

                    <div class="timeline mt-3">
                        @foreach($timelines as $timeline)
                            <div class="tl-item">
                                <div class="tl-dot" style="background:{{ $timeline->color ?? 'var(--teal)' }};
                                                            box-shadow:0 0 0 2px {{ $timeline->color ?? 'var(--teal)' }}">
                                </div>

                                <div class="tl-yr">{{ $timeline->year_range }}</div>
                                <div class="tl-t">{{ $timeline->title }}</div>
                                <div class="tl-s">{{ $timeline->subtitle }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

            {{-- ================= ROW 2 ================= --}}
            <div class="bento mt-4 reveal">

                {{-- BAR CHART --}}
                <div class="bcard b6">
                    <div class="blbl">
                        <i class="bi bi-bar-chart-fill me-1"></i>Procedure Volume
                    </div>
                    <div class="btitl">Surgical Focus Breakdown</div>
                    <div class="chart-box" style="height:210px">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                {{-- SPECIALIZATIONS --}}
                <div class="bcard mint b3">
                    <div class="blbl">
                        <i class="bi bi-tags-fill me-1"></i>Specializations
                    </div>
                    <div class="btitl">Key Skills</div>

                    <div class="mt-2">
                        @foreach($specializations as $skill)
                            <span class="stag">{{ $skill->name }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- AWARDS --}}
                <div class="bcard warm b3">
                    <div class="blbl">
                        <i class="bi bi-trophy-fill me-1"></i>Recognition
                    </div>
                    <div class="btitl">Awards</div>

                    @foreach($awards as $award)
                        <div class="aw-strip">
                            <div class="aw-ico">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div>
                                <div class="aw-t">{{ $award->title }}</div>
                                <div class="aw-s">{{ $award->subtitle }}</div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section>