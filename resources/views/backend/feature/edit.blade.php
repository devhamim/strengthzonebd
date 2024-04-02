@extends('backend.layouts.app')

@section('content')

<div class="dashboard-breadcrumb mb-30">
    <h2>Feature</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Feature</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('feature.update', $features->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $features->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Feature Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="categoryTitle" value="{{ $features->name }}">
                            
                        </div>
                                                        
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Icon</label>
                                <input type="file" name="icon" class="form-control" id="thumbUpload" value="{{ $features->icon }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/feature') }}/{{ $features->icon }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Image</label>
                                <input type="file" name="image" class="form-control" id="thumbUpload" value="{{ $features->image }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/feature') }}/{{ $features->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="5" name="description" class="form-control form-control-sm">{{ $features->description }}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $features->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $features->status == 2 ? 'selected' : '' }}>Deactive</option>
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