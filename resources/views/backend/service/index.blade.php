@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Service</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Service</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Icon</label>
                            <input type="file" name="icon" class="form-control form-control-sm @error('icon') is-invalid @enderror" value="{{ old('icon') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Sort Description</label>
                            <textarea name="sort_desp" class="form-control form-control-sm @error('sort_desp') is-invalid @enderror">{{ old('sort_desp') }}</textarea>
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
                <h5>All Service</h5>
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
                            <th>Image</th>
                            <th>Sort Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/service') }}/{{ $service->icon }}" alt=""></span>
                                        </div>
                                        <div class="part-txt" >
                                            <span class="category-name">{{ $service->title }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span><img width="60px" src="{{ asset('uploads/service') }}/{{ $service->image }}" alt=""></span></td>
                                <td><span class="table-dscr">{{ $service->sort_desp }}</span></td>
                                <td>
                                    @if ($service->status == 1)
                                        <span class="table-dscr text-success">Active</span>
                                    @else
                                        <span class="table-dscr text-warning">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('service.edit', $service->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('service.destroy',  $service->id) }}" method="POST">
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