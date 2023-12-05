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
                Action
              </th>
            </tr>
          </thead>
          @foreach ($barangs as $barang)
          <tbody>
            <tr class="table-info">
              <td>
                {{ $barang->kode_barang }}
              </td>
              <td>
                {{ $barang->nama_barang }}
              </td>
              <td>
                {{ $barang->jenis_varian }}
              </td>
              <td>
                {{ $barang->qty }}
              </td>
              <td>
                {{ $barang->harga_jual }}
                <td class="align-middle">
                  <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ route('show', $barang->id) }}" type="button" class="btn btn-info">Detail</a>
                  <a href="{{ route('edit', $barang->id) }}" type="button" class="btn btn-success">Edit</a>
                  <a href="{{ route('delete', $barang->id) }}" type="button" class="btn btn-danger">Delete</a>
                  </div>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      <br>
      <a href="{{ route('form') }}" type="button" class="btn btn-primary">Tambah Barang</a>
    </div>
  </div>
</div>
</div>
</div>

@endsection