@extends('utama')
@section ('body')


<div class="col-lg-12 stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Table with contextual classes</h4>
      <p class="card-description">
        Add class <code>.table-{color}</code>
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                Kode Barang
              </th>
              <th>
                Nama Barang
              </th>
              <th>
                Jenis Varian
              </th>
              <th>
                Qty
              </th>
              <th>
                Harga Jual
              </th>
              <th>
                Total Harga
              </th>
              <th>
                Potongan Harga
              </th>
              <th>
                Harga yang Harus di Bayar
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-warning">
              <td>
                {{ $barangs->kode_barang }}
              </td>
              <td>
                {{ $barangs->nama_barang }}
              </td>
              <td>
                {{ $barangs->jenis_varian }}
              </td>
              <td>
                {{ $barangs->qty }}
              </td>
              <td>
                {{ $barangs->harga_jual }}
              </td> 
              <td>
                {{ $barangs->total_harga }}
              </td> 
              <td>
                {{ $barangs->potongan_harga }}
              </td> 
              <td>
                {{ $barangs->harga_bayar }}
              </td> 
            </tr>
          </tbody>
        </table>
      </div>
      <br>
      <a href="{{ route('index') }}" type="button" class="btn btn-primary">Kembali</a>
    </div>
  </div>
</div>
</div>
</div>

@endsection