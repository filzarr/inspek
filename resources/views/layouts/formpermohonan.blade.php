@section('css')
    <style>
        body {
            background-color: white !important;
        }
        
       
 
    </style>

@endsection
<div class="container my-5" >
    <div class="row justify-content-center" >
        <h3 class=" text-center">Form PPID Sumatera Utara</h3>
        <div class="col-8 " id="form">
            <form class="py-3" method="POST" action="/submitform">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1" >Nama</label>
                  <input type="text" id="form4Example1" class="form-control" name="nama" />
                  
                </div>
    
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">alamat email</label>
                  <input type="email" id="form4Example2" class="form-control" name="email" />
               
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Nomor handphone</label>
                  <input type="number" id="form4Example2" class="form-control" name="nomorhandphone" />
                
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori Laporan</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                      <option value="permohonan informasi">permohonan informasi</option>
                      <option value="pengajuan keberatan">pengajuan keberatan</option>
    
                    </select>
                  </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Laporan</label>
                  <textarea class="form-control" id="form4Example3" rows="4" name="body"></textarea>
                  
                </div>
    
                <!-- Checkbox -->
    
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
    </div>
</div>