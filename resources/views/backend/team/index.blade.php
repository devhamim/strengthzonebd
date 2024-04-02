@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Team</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-4 col-md-5">
        <div class="panel">
            <div class="panel-header">
                <h5>Add New Team</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Position</label>
                            <input type="text" name="post" class="form-control form-control-sm @error('post') is-invalid @enderror" value="{{ old('post') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control form-control-sm @error('image') is-invalid @enderror" value="{{ old('image') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Facebook</label>
                            <input type="text" name="facebook" class="form-control form-control-sm" value="{{ old('facebook') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Instagram</label>
                            <input type="text" name="instagram" class="form-control form-control-sm" value="{{ old('instagram') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">LinkedIn</label>
                            <input type="text" name="linkedin" class="form-control form-control-sm" value="{{ old('linkedin') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">GitHub</label>
                            <input type="text" name="github" class="form-control form-control-sm" value="{{ old('github') }}">
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
                <h5>All Feature</h5>
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
                            <th>Position</th>
                            <th>Social</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>
                                    <div class="table-category-card">
                                        <div class="part-icon">
                                            <span><img src="{{ asset('uploads/team') }}/{{ $team->image }}" alt=""></span>
                                        </div>
                                        <div class="part-txt">
                                            <span class="category-name">{{ $team->name }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="table-dscr">{{ $team->post }}</span></td>
                                <td>
                                    <span class="table-dscr">{{ $team->facebook }}</span><br>
                                    <span class="table-dscr">{{ $team->instagram }}</span><br>
                                    <span class="table-dscr">{{ $team->linkedin }}</span><br>
                                    <span class="table-dscr">{{ $team->github }}</span><br>
                                </td>
                                <td>
                                    @if ($team->status == 1)
                                        <span class="table-dscr text-success">Active</span>
                                    @else
                                        <span class="table-dscr text-warning">Deactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-box">
                                        <a href="{{ route('team.edit', $team->id) }}"><i class="fa-light fa-pen-to-square"></i></a>
                                        <form action="{{ route('team.destroy',  $team->id) }}" method="POST">
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