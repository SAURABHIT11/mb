@extends('layouts.admin')

@section('title', 'Doctor Profile CMS')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
        <i class="bi bi-check-circle me-2"></i>
        {{ session('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif


    <div class="container-fluid py-4">

        <h4 class="fw-bold mb-4">Doctor Profile CMS</h4>

        {{-- ================= PROFILE STATS ================= --}}

        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header fw-bold bg-white">
                Profile Statistics
            </div>

            <div class="card-body">

                <form action="{{ route('admin.profile.update') }}" method="POST">
                    @csrf

                    <div class="row g-3">

                        <div class="col-md-4">
                            <label class="form-label">Total Surgeries</label>
                            <input type="number" name="total_surgeries"
                                class="form-control @error('total_surgeries') is-invalid @enderror"
                                value="{{ old('total_surgeries', $profile->total_surgeries ?? '') }}">

                            @error('total_surgeries')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Years Experience</label>
                            <input type="number" name="years_experience"
                                class="form-control @error('years_experience') is-invalid @enderror"
                                value="{{ old('years_experience', $profile->years_experience ?? '') }}">

                            @error('years_experience')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Success Rate (%)</label>
                            <input type="number" name="success_rate" max="100"
                                class="form-control @error('success_rate') is-invalid @enderror"
                                value="{{ old('success_rate', $profile->success_rate ?? '') }}">

                            @error('success_rate')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    {{-- Hero Description --}}
                    <div class="mt-4">
                        <label class="form-label fw-semibold">Profile Description</label>
                        <textarea name="description" rows="4"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="This will appear in the homepage hero section...">{{ old('description', $profile->description ?? '') }}</textarea>

                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 px-4">
                        <i class="bi bi-check-circle me-1"></i>
                        Update Profile
                    </button>

                </form>
            </div>
        </div>


        {{-- ================= PROCEDURES ================= --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header fw-bold">Procedures</div>
            <div class="card-body">

                <form action="{{ route('procedures.store') }}" method="POST" class="row g-3 mb-4">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Procedure Name" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="percentage" placeholder="%" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-success w-100">Add</button>
                    </div>
                </form>

                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>%</th>
                        <th>Action</th>
                    </tr>
                    @foreach($procedures as $procedure)
                        <tr>
                            <td>{{ $procedure->name }}</td>
                            <td>{{ $procedure->percentage }}%</td>
                            <td>
                                <form action="{{ route('procedures.destroy', $procedure->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>

        {{-- ================= TIMELINE ================= --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header fw-bold">Timeline</div>
            <div class="card-body">

                <form action="{{ route('timelines.store') }}" method="POST" class="row g-3 mb-4">
                    @csrf
                    <div class="col-md-3">
                        <input type="text" name="year_range" placeholder="2010-2013" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="title" placeholder="Title" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="subtitle" placeholder="Subtitle" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success w-100">Add</button>
                    </div>
                </form>

                <ul class="list-group">
                    @foreach($timelines as $timeline)
                        <li class="list-group-item d-flex justify-content-between">
                            {{ $timeline->year_range }} - {{ $timeline->title }}
                            <form action="{{ route('timelines.destroy', $timeline->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

        {{-- ================= SPECIALIZATIONS ================= --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header fw-bold">Specializations</div>
            <div class="card-body">

                <form action="{{ route('specializations.store') }}" method="POST" class="row g-3 mb-3">
                    @csrf
                    <div class="col-md-10">
                        <input type="text" name="name" placeholder="Specialization" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success w-100">Add</button>
                    </div>
                </form>

                @foreach($specializations as $skill)
                    <span class="badge bg-primary me-2 mb-2">
                        {{ $skill->name }}
                    </span>
                @endforeach

            </div>
        </div>

        {{-- ================= AWARDS ================= --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header fw-bold">Awards</div>
            <div class="card-body">

                <form action="{{ route('awards.store') }}" method="POST" class="row g-3 mb-3">
                    @csrf
                    <div class="col-md-5">
                        <input type="text" name="title" placeholder="Award Title" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="subtitle" placeholder="Subtitle" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success w-100">Add</button>
                    </div>
                </form>

                <ul class="list-group">
                    @foreach($awards as $award)
                        <li class="list-group-item d-flex justify-content-between">
                            {{ $award->title }}
                            <form action="{{ route('awards.destroy', $award->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    </div>
@endsection