@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Privacy Policy</h2>
    {{-- <a href="{{ route('privacyPolicy.edit', $privacyPolicys->first()->id) }}" class="btn btn-sm btn-primary mx-5 px-3">Edit</a> --}}
</div>
{{-- <div class="row g-4">
    <div class="col-xxl-8 col-md-8 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Privacy Policy</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('privacyPolicy.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="20" id="summernote" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
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
</div> --}}

<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Privacy Policys</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('privacyPolicy.update', $privacyPolicys->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $privacyPolicys->id }}">
                    <div class="row g-3">
                        
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="7" id="summernote" name="description" class="form-control form-control-sm">{!! $privacyPolicys->description !!}</textarea>
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