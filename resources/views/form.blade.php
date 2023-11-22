@extends('utama')
@section ('form_input')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Barang</title>
</head>
<body>
    

    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Form Input Data Barang
                  </p>
                  <form class="forms-sample" action="/proses-barang" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="kode_barang">Kode Barang</label>
                      <input type="text" class="form-control" placeholder="Kode Barang" name="kode_barang">
                    </div>
                    <div class="form-group">
                      <label for="nama_barang">Nama Barang</label>
                      <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
                    </div>
                    <div class="form-group">
                      <label for="jenis_varian">Jenis Varian</label>
                      <input type="text" class="form-control" placeholder="Jenis Varian" name="jenis_varian">
                    </div>
                    <div class="form-group">
                      <label for="qty">qty</label>
                      <input type="number" class="form-control" placeholder="qty" name="qty">
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Harga Jual</label>
                        <input type="text" class="form-control" placeholder="Harga Jual" name="harga_jual">
                      </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
</body>
</html>