@extends('backend.layouts.app')

@section('content')

<div class="dashboard-breadcrumb mb-30">
    <h2>Setting</h2>
</div>

<div class="row">
    <div class="col-12">
        <div class="panel">
            <div class="panel-header">
                <nav>
                    <div class="btn-box d-flex flex-wrap gap-1" id="nav-tab" role="tablist">
                        <button class="btn btn-sm btn-outline-primary active" id="nav-edit-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-edit-profile" type="button" role="tab" aria-controls="nav-edit-profile" aria-selected="true">Edit Setting</button>
                    </div>
                </nav>
            </div>
            <div class="panel-body">
                <div class="tab-content profile-edit-tab" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-edit-profile" role="tabpanel" aria-labelledby="nav-edit-profile-tab" tabindex="0">
                        <form action="{{ route('setting.update', $settings->first()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="profile-edit-tab-title">
                                <h6>Public Information</h6>
                            </div>
                            <div class="public-information mb-30">
                                <div class="row g-4">
                                    <div class="col-md-3">
                                        <div class="admin-profile">
                                            <div class="image-wrap">
                                                <div class="part-img  overflow-hidden">
                                                    <img src="{{ asset('uploads/setting') }}/{{ $settings->first()->logo }}" alt="Logo">
                                                </div>
                                                <button class="image-change"><img src="{{ asset('uploads/setting') }}/{{ $settings->first()->favicon }}" alt=""></button>
                                            </div>
                                            <span class="admin-name">{{ $settings->first()->name }}</span>
                                            <span class="admin-role">{{ $settings->first()->title }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="" class="form-label">Website Name</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Website Name" value="{{ $settings->first()->name }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="" class="form-label">Website Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa-light fa-at"></i></span>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $settings->first()->email }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">Website About</label>
                                                <textarea class="form-control h-150-p" name="about" placeholder="about">{{ $settings->first()->about }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-edit-tab-title">
                                <h6>Private Information</h6>
                            </div>
                            <div class="private-information mb-30">
                                <div class="row g-3">
                                    <div class="col-md-3 col-sm-6">
                                        <label for="" class="form-label">Website Number</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                            <input type="text" class="form-control" name="number" placeholder="Number" value="{{ $settings->first()->number }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <label for="" class="form-label">Logo</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                            <input type="file" class="form-control" name="logo" placeholder="Logo" value="{{ $settings->first()->logo }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <label for="" class="form-label">Footer Logo</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                            <input type="file" class="form-control" name="footer_logo" placeholder="Footer Logo" value="{{ $settings->first()->logo }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <label for="" class="form-label">Favicon</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-user"></i></span>
                                            <input type="file" class="form-control" name="favicon" placeholder="Favicon" value="{{ $settings->first()->favicon }}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4 col-sm-6">
                                        <label for="" class="form-label">Address</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-envelope"></i></span>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" value="{{ $settings->first()->address }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="" class="form-label">Footer</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-phone"></i></span>
                                            <input type="text" class="form-control @error('footer') is-invalid @enderror" name="footer" placeholder="Footer" value="{{ $settings->first()->footer }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="" class="form-label">Title</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{ $settings->first()->title }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-edit-tab-title">
                                <h6>Meta</h6>
                            </div>
                            <div class="private-information mb-30">
                                <div class="row g-3">
                                    <div class="col-md-4 col-sm-6">
                                        <label for="" class="form-label">Meta Title</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                            <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{ $settings->first()->meta_title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="" class="form-label">Meta Tag</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                            <input type="text" class="form-control" name="meta_tag" placeholder="Meta Tag" value="{{ $settings->first()->meta_tag }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label for="" class="form-label">Meta Description</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-light fa-globe"></i></span>
                                            <input type="text" class="form-control" name="meta_description" placeholder="Meta Description" value="{{ $settings->first()->meta_description }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="profile-edit-tab-title">
                                <h6>Social Information</h6>
                            </div>
                            <div class="social-information">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-brands fa-facebook-f"></i></span>
                                            <input type="url" class="form-control" name="facebook" placeholder="Facebook" value="{{ $settings->first()->facebook }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-brands fa-twitter"></i></span>
                                            <input type="url" class="form-control" name="twitter" placeholder="Twitter" value="{{ $settings->first()->twitter }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-brands fa-linkedin-in"></i></span>
                                            <input type="url" class="form-control" name="linkedin" placeholder="Linkedin" value="{{ $settings->first()->linkedin }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                                            <input type="url" class="form-control" name="instagram" placeholder="Instagram" value="{{ $settings->first()->instagram }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
                                            <input type="url" class="form-control" name="youtube" placeholder="Youtube" value="{{ $settings->first()->youtube }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa-brands fa-pinterest-p"></i></span>
                                            <input type="url" class="form-control" name="pinterest" placeholder="Pinterest" value="{{ $settings->first()->pinterest }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection