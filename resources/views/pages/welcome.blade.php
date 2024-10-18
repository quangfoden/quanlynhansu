@extends('layouts.app')

@section('nav')
    @include('components.nav')
@endsection

@section('content')
{{-- Hero Section --}}
<div class="container-fluid my-0 py-0">
    <div class="row hero">
        <div class="col-8 offset-1 d-flex align-items-center">
            <div>
                <h1 class="text-white font-weight-bold text-capitalize">NTH-Gamming</h1>
                <h4 class="text-white">Công ty cổ phần trực tuyến Gameming</h4>
            </div>
        </div>
    </div>
</div>
{{-- End of Hero Section --}}

<div class="container pb-5" id="announcements">
    {{-- Announcements --}}
    @if (count($announcements) > 0)
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h3>Thông Báo</h3>
                <div class="line text-center"> &nbsp;</div>
            </div>
        </div>
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-lg-4 col-sm-12 mb-2">
                <div class="card mx-3 h-100">
                    @if ($announcement->attachment !== null)
                        <img src="{{ asset('storage/' . $announcement->attachment) }}" class="card-img-top" alt="announcement">                    
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $announcement->title }}</h5>
                        <p class="card-text">{{ $announcement->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('welcome.announcements.show', ['announcement' => $announcement->id]) }}" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-2 float-right mr-1">
            <div class="col-12">
                <a href="{{ route('welcome.announcements') }}" class="btn btn-primary">Xem tất cả</a>
            </div>
        </div>
    @endif
    {{-- End of Announcements --}}

    {{-- Job Recruitments --}}
    @if (count($recruitments) > 0)
        <div class="row mt-5" id="recruitments" style="clear: both;">
            <div class="col-12 text-center mt-5">
                <h3>Tuyển dụng</h3>
                <div class="line text-center"> &nbsp;</div>
            </div>
        </div>
        <div class="row">
            @foreach ($recruitments as $recruitment)
            <div class="col-lg-4 col-sm-12 mb-2">
                <div class="card mx-3 h-100">
                    @if ($recruitment->attachment !== null)
                        <img src="{{ $recruitment->attachment }}" class="card-img-top" alt="announcement">                    
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $recruitment->title }}</h5>
                        <p class="card-text">{{ $recruitment->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('welcome.recruitments.show', ['recruitment' => $recruitment->id ]) }}" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-2 float-right mr-1">
            <div class="col-12">
                <a href="{{ route('welcome.recruitments') }}" class="btn btn-primary">Xem tất cả</a>
            </div>
        </div>
    @endif
    {{-- End of Job Recruitments --}}
</div>
@endsection