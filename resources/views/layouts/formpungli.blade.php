@section('css')
    <style>
        body {
            background-color: white !important;
        }
        
       
 
    </style>

@endsection
<div class="container my-5" >
    <div class="row justify-content-center" >
        <h3 class=" text-center">Form Laporan Pungli Sumatera Utara</h3>
        <div class="col-8 " id="form">
            <form class="py-3" method="POST" action="/submitpungli">
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
                  <input type="number" id="form4Example2" class="form-control" name="nomorhanphone" />
                
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Alamat</label>
                  <input type="text" id="form4Example2" class="form-control" name="alamat" />
                
                </div>
          
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Laporan</label>
                  <textarea class="form-control" id="form4Example3" rows="4" name="aduan"></textarea>
                  
                </div>
    
                <!-- Checkbox -->
    
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
    </div>
</div>