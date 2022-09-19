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
                    <h4 class="card-title">Service List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>Title</th>
                                    <th>comment</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->comment }}</td>
                                    <td><img src="{{ asset('/') }}assets/images/testimonial/{{ $item->image }}" alt=""
                                          style="
                                        width: 5rem;
                                    "></td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="{{ route('edit.testimonial',$item->id) }}" class="btn btn-info"><i
                                                  class="fas fa-edit"></i></a>
                                            <form action="{{ route('destroy.testimonial',$item->id) }}" method="POST"
                                              id="dltform{{ $item->id }}">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            <button onclick="dltItem({{ $item->id }})" class="btn btn-danger"><i
                                                  class="fas fa-trash"></i>
                                            </button>
                                        </div>
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
<script>



</script>
@endsection
