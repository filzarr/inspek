@extends('admin.layouts.main')

@section('container')
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('admin.partials.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <a href="/create/menu" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add Menu
            </a>
            <a href="/create/menusingle/add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add Menu Single</a>
                <a href="/create/navbar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Submenu</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Submenu List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <h1>Submenu</h1>
                            <thead>
                                <tr>
                                    <th>No</th>
                                
                                    <th>Submenu</th>
                               
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                
                                        <td>{{ $data->submenu }}</td>
                                        <td><a href="/navbar/destroy/{{ $data->id }}" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a></td>
                                      
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <h1>Menu</h1>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Menu</th>
                                 
                               
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nav as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                       
                                        <td>{{ $data->menu }}</td>
                                        <td><a href="/navbar/hapus/{{ $data->id }}" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a></td>
                                      
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