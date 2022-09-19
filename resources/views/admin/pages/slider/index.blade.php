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
                    <h4 class="card-title">Add Slider</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('create.slider') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class=" mb-2">
                            <label for="floatingInput">Service image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <button type="submit" class="btn-primary btn">Sumbit</button>
                    </form>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Service List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>image</th>
                                    <th>sction</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slider as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td><img src="{{ asset('/') }}assets/images/slider/{{ $item->image }}" alt="" style="
                                        width: 5rem;
                                    "></td>
                                    <td>
                                        <form action="{{ route('destroy.slider',$item->id) }}" method="POST"
                                          id="dltform{{ $item->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <button onclick="dltItem({{ $item->id }})" class="btn btn-danger"><i
                                              class="fas fa-trash"></i>
                                        </button>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- end card body -->
            </div>

        </div>
    </div>
</div>
@endsection
