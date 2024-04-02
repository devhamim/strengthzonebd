@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Portfolio</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Portfolio</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('portfolios.update', $portfolios->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $portfolios->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Category</label>
                            <select name="feature_id" id="" class="form-control form-control-sm @error('feature_id') is-invalid @enderror" value="{{ old('feature_id') }}">
                                @foreach ($feature_id as $feature)
                                    <option value="{{ $feature->id }}"{{ $feature->id == $portfolios->id?'selected':'' }}>{{ $feature->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" value="{{ $portfolios->name }}">
                            
                        </div>
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm" value="{{ $portfolios->title }}">
                            
                        </div>
                            
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Image</label>
                                <input type="file" name="image" class="form-control" id="thumbUpload" value="{{ $portfolios->image }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/portfolio') }}/{{ $portfolios->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Client</label>
                            <input type="text" name="client" class="form-control form-control-sm" value="{{ $portfolios->client }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control form-control-sm" value="{{ $portfolios->date }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Value</label>
                            <input type="number" name="value" class="form-control form-control-sm" value="{{ $portfolios->value }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Link</label>
                            <input type="text" name="link" class="form-control form-control-sm" value="{{ $portfolios->link }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Home Page</label>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="define" id="gridRadios1" value="1" {{ $portfolios->define == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios1">
                                    No
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="define" id="gridRadios1" value="2" {{ $portfolios->define == 2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios1">
                                    Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Completed</label>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="completed" id="gridRadios1" value="1" {{ $portfolios->completed == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios1">
                                    Running
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="completed" id="gridRadios1" value="2" {{ $portfolios->completed == 2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios1">
                                    Yes
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="7" id="summernote" name="description" class="form-control form-control-sm">{!! $portfolios->description !!}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $portfolios->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $portfolios->status == 2 ? 'selected' : '' }}>Deactive</option>
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