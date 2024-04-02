@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>About</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit About</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('about.update', $abouts->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $abouts->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control form-control-sm" value="{{ $abouts->subtitle }}">
                            
                        </div>
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm" value="{{ $abouts->title }}">
                            
                        </div>
                            
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Image</label>
                                <input type="file" name="image" class="form-control" id="thumbUpload" value="{{ $abouts->image }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/about') }}/{{ $abouts->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="define" id="gridRadios1" value="1" {{ $abouts->define == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios1">
                                    Home Page
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="define" id="gridRadios2" value="2" {{ $abouts->define == 2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios2">
                                    About Page
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="7" id="summernote" name="description" class="form-control form-control-sm">{!! $abouts->description !!}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $abouts->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $abouts->status == 2 ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <div class="btn-box">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection