@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <form action="">

                <h5 class="font-size-14 mb-4"><i class="mdi mdi-plus text-primary me-1"></i>Add Service</h5>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="title" id="title"
                              placeholder="service title">
                            <label for="floatingInput">Service Title</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="description" id="description"
                              placeholder="service description">
                            <label for="floatingInput">Service description</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="details" id="details"
                              placeholder="service details">
                            <label for="floatingInput">Service details</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class=" mb-3">
                            <label for="floatingInput">Service image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Select</label>
                            <select class="form-select">
                                <option>Select</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">create</button>
            </form>
        </div>
    </div>
</div>
@endsection
