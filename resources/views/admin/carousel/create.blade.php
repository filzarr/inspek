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
                                <form method="post" action="{{ route('carousel.store') }}" enctype="multipart/form-data">
                                    @csrf
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