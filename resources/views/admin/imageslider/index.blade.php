@extends('admin.layouts.main')

@section('container')
    <!-- Main Content -->
    <div id="content">
        {{-- <div class="container mt-5 mb-5" >
            <div class="d-flex justify-content-center">
                <div class=" col-5 ">
                    <canvas id="myChart" width="500" height="500">
                    </canvas> --}}
                {{-- </div>
            </div>
        </div> --}}
        <!-- Topbar -->
        @include('admin.partials.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <a href="{{ route('imageslider.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Image</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Image Slider</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                             

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @if($data-> id > 5)
                                        <td><img src="app/{{ $data->image }}" alt="" width="100" height="100"></td>
                                        
                                        @else
                                        <td><img src="storage/{{ $data->image }}" alt="" width="100" height="100"></td>
                                        @endif

                                        <td>
                                          
                                            <a href="{{ route('imageslider.edit', $data->id) }}"
                                                class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('imageslider.destroy', $data->id) }}" method="post">
                                                @csrf

                                                @method('DELETE')
                                            
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
                                            </form>
                                            {{-- <a href="delete/{{ $post->id }}" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
