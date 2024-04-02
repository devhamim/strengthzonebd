
@extends('student.layout.app')
@section('content')
<div class="col-xl-12 col-md-12">
    <div class="settings-widget">
        <div class="settings-inner-blk p-0">
            <div class="comman-space pb-0">
                <div class="filter-grp ticket-grp d-flex align-items-center justify-content-between">
                    <div>
                        <h3>{{ $courses->rel_to_course->title }}</h3>
                    </div>
                    <div class="ticket-btn-grp">
                        <a href="{{ route('student.couse.list') }}">Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-tab tickets-tab-blk">
                            <ul class="nav nav-justified " style="display: inline-grid" role="tablist">
                                @if ($courses_videos)
                                    @foreach ($courses_videos as $key => $video)
                                        <li class="nav-item" role="presentation">
                                            <a href="#{{ $video->id }}" class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" aria-selected="{{ $key == 0 ? 'true' : 'false' }}" role="tab" tabindex="-1">
                                                <img src="{{ asset('student') }}/img/icon/play-icon.svg" alt=""> {{ $video->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <p>No courses found for the current user.</p>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            @if ($courses_videos)
                                @foreach ($courses_videos as $key => $video)
                                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="{{ $video->id }}" role="tabpanel">
                                    <div class="settings-tickets-blk table-responsive">
                                        <div class="student-widget lesson-introduction">
                                            <div class="lesson-widget-group">
                                                <div class="introduct-video">
                                                    <video width="100%" height="300" controls>
                                                        <source src="{{ asset($video->path) }}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <p>No courses found for the current user.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

