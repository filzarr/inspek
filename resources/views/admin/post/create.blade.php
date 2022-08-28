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
        
            <!-- DataTales Example -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Create Post</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      
                                        <label class="label">Post Title: </label>
                                        <input type="text" name="title" class="form-control" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="label">Post Body: </label>
                                        <textarea name="body" rows="4" cols="30" class="form-control" required></textarea>
                                    </div>
                                   
                                    <div class="form-group">
                                      
                                        <label class="label">image</label>
                                        <input type="file" name="image" class="form-control" required/>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" class="btn btn-success" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    
    </div>
@endsection