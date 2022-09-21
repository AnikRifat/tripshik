@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <form action="{{route('store.faq')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h5 class="font-size-14 mb-4"><i class="mdi mdi-plus text-primary me-1"></i>Add FAQ</h5>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="ques" id="ques" placeholder="FAQ Title">
                            <label for="floatingInput">FAQ Title</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="ans" id="ans" placeholder="FAQ Answere">
                            <label for="floatingInput">FAQ Answere</label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">create</button>
            </form>
        </div>
    </div>
</div>
@endsection
