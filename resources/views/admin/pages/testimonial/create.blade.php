@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <form action="{{route('store.testimonial')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h5 class="font-size-14 mb-4"><i class="mdi mdi-plus text-primary me-1"></i>Add Testimonial</h5>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="name"
                              placeholder="Testimonial title">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" id="title"
                              placeholder="Testimonial title">
                            <label for="floatingInput">Title</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="comment" id="comment"
                              placeholder="Testimonial comment">
                            <label for="floatingInput">Testimonial comment</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class=" mb-3">
                            <label for="floatingInput">Testimonial image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">create</button>
            </form>
        </div>
    </div>
</div>
@endsection
