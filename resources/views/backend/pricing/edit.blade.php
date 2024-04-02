@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Pricing</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Pricing</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('pricing.update', $pricings->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $pricings->id }}">
                    <div class="row g-3">
                        
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm" value="{{ $pricings->title }}">
                        </div>
                            
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Icon</label>
                                <input type="file" name="icon" class="form-control" id="thumbUpload" value="{{ $pricings->icon }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/pricing') }}/{{ $pricings->icon }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control form-control-sm" value="{{ $pricings->price }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Link</label>
                            <input type="url" name="link" class="form-control form-control-sm" value="{{ $pricings->link }}">
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="7" id="summernote" name="description" class="form-control form-control-sm">{!! $pricings->description !!}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $pricings->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $pricings->status == 2 ? 'selected' : '' }}>Deactive</option>
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