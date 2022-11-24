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
                                <form method="post" action="/create/menusingle/store" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      
                                        <label class="label">menu</label>
                                        <input type="text" name="menu" class="form-control" required/>
                                    </div>
                                    <div class="form-group">

                                        <label class="label">Post Title: </label>
                                        <input type="text" name="title" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="label">Post Body: </label>
                                        <input id="body" type="hidden" name="body" required>
                                        <trix-editor input="body"></trix-editor>
                                    </div>

                                    <div class="form-group">

                                        <label class="label">image</label>
                                        <input type="file" name="image" class="form-control" required />
                                    </div>
                                    <div>
                                        <label for="label">Judul</label>
                                        <select class="form-select" aria-label="Default select example" name="judul_id">
                                            @foreach ($data as $data)
                                            <option value="{{ $data->id }}" selected>{{ $data->judul }}</option>
                                            @endforeach
                                        
                                        
                                                                              </select>
                                                                            </div>
                                    <input type="hidden" name="submenu" value="ya">
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
