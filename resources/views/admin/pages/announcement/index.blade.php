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
                    <h4 class="card-title">Announcement List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>date</th>
                                    <th>Title</th>
                                    <th>details</th>
                                    <th>image</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($announcements as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->details }}</td>
                                    <td><img width="150"
                                          src="{{ asset('/') }}assets/images/announcement/{{ $item->image }}" alt="">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="{{ route('edit.announcement',$item->id) }}" class="btn btn-info"><i
                                                  class="fas fa-edit"></i></a>
                                            <form action="{{ route('destroy.announcement',$item->id) }}" method="POST"
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
