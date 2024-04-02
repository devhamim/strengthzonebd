@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Portfolio</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Portfolio</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Category</label>
                            <select name="feature_id" id="" class="form-control form-control-sm @error('feature_id') is-invalid @enderror" value="{{ old('feature_id') }}">
                                @foreach ($feature_id as $feature)
                                    <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Client</label>
                            <input type="text" name="client" class="form-control form-control-sm " value="{{ old('client') }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control form-control-sm " value="{{ old('date') }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Project Value</label>
                            <input type="number" name="value" class="form-control form-control-sm" value="{{ old('value') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Live Link</label>
                            <input type="text" name="link" class="form-control form-control-sm" value="{{ old('link') }}">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label">Completed</label>
                            <div class="form-check mb-10">
                                <input class="form-check-input @error('completed') is-invalid @enderror" type="radio" name="completed" id="gridRadios1" value="1">
                                <label class="form-check-label" for="gridRadios1">
                                    Running
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input" type="radio" name="completed" id="gridRadios1" value="2">
                                <label class="form-check-label" for="gridRadios1">
                                    Yes
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <label class="form-label">Home Page</label>
                            <div class="form-check mb-10">
                                <input class="form-check-input @error('define') is-invalid @enderror" type="radio" name="define" id="gridRadios1" value="1">
                                <label class="form-check-label" for="gridRadios1">
                                    No
                                </label>
                            </div>
                            <div class="form-check mb-10">
                                <input class="form-check-input @error('define') is-invalid @enderror" type="radio" name="define" id="gridRadios1" value="2">
                                <label class="form-check-label" for="gridRadios1">
                                    yes
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="7" id="summernote" name="description" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
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
                <h5>All Portfolio</h5>
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
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>client</th>
                            <th>Date</th>
                            <th>Value</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->image }}" alt=""></span>
                                        </div>
                                        <div class="part-txt" >
                                            <span class="category-name">{{ $portfolio->name }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="table-dscr">{{ $portfolio->title }}</span></td>
                                <td><span class="table-dscr">{{ $portfolio->rel_to_feature->name }}</span></td>
                                <td><span class="table-dscr">{!! $portfolio->description !!}</span></td>
                                <td><span class="table-dscr">{{ $portfolio->client }}</span></td>
                                <td><span class="table-dscr">{{ $portfolio->date }}</span></td>
                                <td><span class="table-dscr">{{ $portfolio->value }}</span></td>
                                <td>
                                    @if ($portfolio->status == 1)
                                        <span class="table-dscr text-success">Active</span>
                                    @else
                                        <span class="table-dscr text-warning">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('portfolios.edit', $portfolio->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('portfolios.destroy',  $portfolio->id) }}" method="POST">
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