@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Course</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Course</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control form-control-sm @error('category') is-invalid @enderror" value="{{ old('category') }}" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Tag</label>
                            <input type="text" name="tag" class="form-control form-control-sm @error('tag') is-invalid @enderror" value="{{ old('tag') }}" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control form-control-sm @error('price') is-invalid @enderror" value="{{ old('price') }}" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Discount</label>
                            <input type="number" name="discount" class="form-control form-control-sm " value="{{ old('discount') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image') }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="7" id="summernote" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>
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

    <div class="col-xxl-8 col-md-7">
        <div class="panel">
            <div class="panel-header">
                <h5>All Course</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    <div class="digi-dropdown dropdown">

                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">

                        </div>
                        <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                            <div id="productTableLength"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                    <thead>
                        <tr>
                            <th class="no-sort">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="markAllProduct">
                                </div>
                            </th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt=""></span>
                                        </div>
                                        <div class="part-txt" style="width: 120px">
                                            <span class="category-name">{{ $course->title }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="table-dscr">{{ $course->category }}</span></td>
                                <td><span class="table-dscr">{{ $course->tag }}</span></td>
                                <td><span class="table-dscr">{{ $course->price }}</span></td>
                                <td><span class="table-dscr">{{ $course->discount }}</span></td>
                                <td><span class="table-dscr">{{ $course->total }}</span></td>
                                <td>
                                    @if ($course->status == 1)
                                        <span class="table-dscr text-success">Active</span>
                                    @else
                                        <span class="table-dscr text-warning">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('course.invantory', $course->id) }}"><i class="fa-light fa-regular fa-eye"></i></a>
                                        <a href="{{ route('course.edit', $course->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('course.destroy',  $course->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" border-0 mr-2">
                                                <i class="fa-light fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>
@endsection
