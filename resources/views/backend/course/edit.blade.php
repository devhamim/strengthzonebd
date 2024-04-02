@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Courses</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Courses</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('course.update', $courses->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $courses->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" value="{{ $courses->title }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control form-control-sm @error('category') is-invalid @enderror" value="{{ $courses->category }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Tag</label>
                            <input type="text" name="tag" class="form-control form-control-sm @error('tag') is-invalid @enderror" value="{{ $courses->tag }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control form-control-sm @error('price') is-invalid @enderror" value="{{ $courses->price }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Discount</label>
                            <input type="text" name="discount" class="form-control form-control-sm " value="{{ $courses->discount }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="3" id="summernote" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror" required>{{ $courses->description }}</textarea>
                            @error('description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Image</label>
                                <input type="file" name="image" class="form-control" id="thumbUpload" value="{{ $courses->image }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/course') }}/{{ $courses->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $courses->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $courses->status == 2 ? 'selected' : '' }}>Deactive</option>
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
