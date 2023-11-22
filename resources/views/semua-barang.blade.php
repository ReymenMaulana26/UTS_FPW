<!-- dalam resources/views/semua-barang.blade.php -->

<h2>Semua Barang</h2>
<ul>
    @foreach ($barangs as $barang)
        <li>{{ $barang->nama_barang }} - {{ $barang->harga_jual }}</li>
    @endforeach
</ul>
