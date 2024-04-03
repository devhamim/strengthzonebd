@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Student</h2>
</div>
<div class="row g-4">

    <div class="col-xxl-12 col-md-12">
        <div class="panel">
            <div class="panel-header">
                <h5>All Student</h5>
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
                            <th>Course</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Note</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentslist as $students)
                            <tr>

                                <td><span class="table-dscr">{{ $students->rel_to_course->title }}</span></td>
                                <td><span class="table-dscr">{{ $students->name }}</span></td>
                                <td><span class="table-dscr">{{ $students->email }}</span></td>
                                <td><span class="table-dscr">{{ $students->number }}</span></td>
                                <td><span class="table-dscr">{{ $students->address }}</span></td>
                                <td><span class="table-dscr">{{ $students->note }}</span></td>
                                <td>
                                    @if ($students->permission == 0)
                                        <form action="{{ route('account.permission.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $students->id }}" name="id">
                                            <input type="hidden" value="{{ $students->customer_id }}" name="customer_id">
                                            <input type="hidden" value="1" name="permission">
                                            <button style="border: none;" type="submit" class="text-danger" onclick="return confirm('Are you sure to Approve this?')">
                                                Inactive
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-success">Active</span>
                                    @endif

                                </td>
                                <td>
                                    <div class="btn-box">
                                        <form action="{{ route('studentlist.destroy',  $students->id) }}" method="POST">
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
