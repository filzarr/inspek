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
            <a href="{{ route('posts.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add Post</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Post List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Date Published</th>
                                    <th>View Count</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->published_at }}</td>
                                        <td>{{ $post->view_count }}</td>
                                        <td>
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="/posts/delete/{{ $post->id }}" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a>
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