@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <form action="{{route('update.announcement',$announcement->id)}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <h5 class="font-size-14 mb-4"><i class="mdi mdi-plus text-primary me-1"></i>Edit announcement</h5>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="title" id="title"
                              placeholder="announcement Title" value="{{ $announcement->title }}">
                            <label for="floatingInput">Announcement Title</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="details" id="details"
                              placeholder="announcement details" value="{{ $announcement->details }}">
                            <label for="floatingInput">Announcement Details</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class=" mb-3">
                            <label for="floatingInput">Announcement image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
@endsection
