<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data Barang</title>
</head>
<body>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Data Barang</h3>
                            <br/>
                            <br/>
                            
                            <table class="table table-bordered border-dark">
                                <tbody>
                                  <tr>
                                    <td>Kode Barang :</td>
                                    <td>{{ $kode_barang }}</td>
                                  </tr>
                                  <tr>
                                    <td>Nama Barang :</td>
                                    <td>{{ $nama_barang }}</td>
                                  </tr>
                                  <tr>
                                    <td>Jenis Varian :</td>
                                    <td>{{ $jenis_varian }}</td>
                                  </tr>
                                  <tr>
                                    <td>Qty :</td>
                                    <td>{{ $qty }}</td>
                                  </tr>
                                  <tr>
                                    <td>Harga Jual:</td>
                                    <td>{{ $harga_jual }}</td>
                                  </tr>
                                  <tr>
                                    <td>Total Harga :</td>
                                    <td>{{ $total_harga }}</td>
                                  </tr>
                                  <tr>
                                    <td>Potongan Harga :</td>
                                    <td>{{ $potongan_harga }} ({{ $persentase_potongan }}%)</td>
                                  </tr>
                                  <tr>
                                    <td>Harga yang Harus Dibayar :</td>
                                    <td>{{ $harga_bayar }}</td>
                                  </tr>
                                  
                                </tbody>
                              </table>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>