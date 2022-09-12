@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Custom Tabs</h4>
                    <p class="card-title-desc">Example of custom tabs</p>
                </div><!-- end card header -->

                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#basic" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Basic</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#landing" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Slider</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Contacts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab"
                              aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">About</span>
                            </a>
                        </li>
                    </ul>
                    <form action="" method="post"></form>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane" id="basic" role="tabpanel">
                            <p class="mb-0">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Website...">
                                <label for="name">Website Name</label>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Website logo</label>
                                <input class="form-control" type="file" name="logo" id="logo">
                            </div>
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
                                  placeholder="Website...">
                                <label for="yt_link">slider youtube link</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="slogan" name="slogan"
                                  placeholder="Website...">
                                <label for="slogan">slider Text</label>
                            </div>
                            <div class="mb-3">
                                <label for="slider" class="form-label">Website slider</label>
                                <input class="form-control" type="file" name="slider" id="slider">
                            </div>
                            </p>
                        </div>
                        <div class="tab-pane" id="contacts" role="tabpanel">
                            <p class="mb-0">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                  placeholder="Website...">
                                <label for="email">website email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone"
                                  placeholder="Website...">
                                <label for="phone">website phone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="address" name="address"
                                  placeholder="Website...">
                                <label for="address">website address</label>
                            </div>

                            </p>
                        </div>
                        <div class="tab-pane active" id="about" role="tabpanel">
                            <p class="mb-0">
                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                art party before they sold out master cleanse gluten-free squid
                                scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                art party locavore wolf cliche high life echo park Austin. Cred
                                vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                mustache readymade keffiyeh craft.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div>

    </div>
</div>
</div>

@endsection
