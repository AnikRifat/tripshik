@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <form action="{{ route('update.content',$content->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Website Content</h4>
                        <button type="submit" class="btn btn-primary w-md btn-sm">Update <i
                              class="fas fa-arrow-up"></i></button>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" data-bs-toggle="tab" href="#basic" role="tab"
                                  aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Basic</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#landing" role="tab"
                                  aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Slider</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab"
                                  aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                    <span class="d-none d-sm-block">Contacts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" href="#about" role="tab" aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                    <span class="d-none d-sm-block">About</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" href="#other" role="tab" aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                    <span class="d-none d-sm-block">Other Images</span>
                                </a>
                            </li>
                        </ul>


                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="basic" role="tabpanel">
                                <p class="mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" name="name"
                                      placeholder="Website..." value="{{ $content->name }}">
                                    <label for="name">Website Name</label>
                                </div>
                                <img width="200" src="{{ asset('/') }}assets/images/{{ $content->logo }}" alt="">
                                <div class="mb-3">
                                    <label for="logo" class="form-label">Website logo</label>
                                    <input class="form-control" type="file" name="logo" id="logo">
                                </div>
                                <img width="200" src="{{ asset('/') }}assets/images/{{ $content->favicon }}" alt="">
                                <div class="mb-3">
                                    <label for="favicon" class="form-label">Website favicon</label>
                                    <input class="form-control" type="file" name="favicon" id="favicon">
                                </div>
                                </p>

                            </div>
                            <div class="tab-pane" id="landing" role="tabpanel">
                                <p class="mb-0">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="yt_link" name="yt_link"
                                      placeholder="Website..." value="{{ $content->yt_link }}">
                                    <label for="yt_link">slider youtube link</label>
                                </div>
                                <img width="200" src="{{ asset('/') }}assets/images/{{ $content->slider_image }}"
                                  alt="">
                                <div class="mb-3">

                                    <label for="slider" class="form-label">Website slider</label>
                                    <input class="form-control" type="file" name="slider_image" id="slider">
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Website Slider text</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea id="ckeditor-slider"
                                          name="slider_text">{!! $content->slider_text !!}</textarea>
                                    </div>
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane" id="contacts" role="tabpanel">
                                <p class="mb-0">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                      placeholder="Website..." value="{{ $content->email }}"">
                                    <label for=" email" ">website email</label>
                                </div>
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                      placeholder="Website..." value="{{ $content->phone }}">
                                    <label for="phone">website phone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="address" name="address"
                                      placeholder="Website..." value="{{ $content->address }}">
                                    <label for="address">website address</label>
                                </div>

                                </p>
                            </div>
                            <div class="tab-pane " id="about" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Website About text</h4>
                                    </div>
                                    <div class="card-body">
                                        <textarea id="ckeditor-about" name="about">{!! $content->about !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="other" role="tabpanel">
                                <p class="mb-0">
                                    <img width="200" src="{{ asset('/') }}assets/images/{{ $content->banner_image }}"
                                      alt="">
                                <div class="mb-3">

                                    <label for="banner_image" class="form-label">Website banner image</label>
                                    <input class="form-control" type="file" name="banner_image" id="banner_image">
                                </div>
                                <img width="200" src="{{ asset('/') }}assets/images/{{ $content->safe_image }}" alt="">
                                <div class="mb-3">

                                    <label for="safe_image" class="form-label">Website safe image</label>
                                    <input class="form-control" type="file" name="safe_image" id="safe_image">
                                </div>
                                </p>
                            </div>
                        </div>


                    </div>
                </div><!-- end card-body -->
            </form>
        </div>

    </div>
</div>
</div>

@endsection
