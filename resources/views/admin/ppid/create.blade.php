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
                                <form method="post" action="{{ route('ppidadmin.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      
                                        <label class="label">PPID judul: </label>
                                        <input type="text" name="judul" class="form-control" required  />
                                    </div>
                                    <div class="form-group">
                                        <label class="label">PPID Kategori: </label>
                                     
                                        <input type="text" name="kategori" class="form-control" required  />
                                    </div>
                                    <div class="form-group">
                                        <label class="label">PPID Tanggal: </label>
                                     
                                        <input type="text" name="tanggal" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                       
                                        <select class="form-control" id="exampleFormControlSelect1" name="category">
                                          <option value="informasi berkala">informasi berkala</option>
                                          <option value="informasi publik">informasi publik</option>
                        
                                        </select>
                                      </div>
                                    <div class="form-group">
                                      
                                        <label class="label">File Pdf</label>
                                        <input type="file" name="pdf" class="form-control"   />
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
