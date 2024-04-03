<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBI Test 1</title>
    <link rel="icon" href="https://bbi-apparel.com/wp-content/uploads/2023/04/Logo-BBI-1-100x100.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5">
        <h1 class="text-center fw-bold mb-5">Top 3 Kategori</h1>
        <div class="card ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Total Terjual</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($top as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->total_terjual }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between ">
            <div class="col-6 pe-3">
                <h4 class="text-center fw-bold mb-3 mt-5 ">Data Sales</h4>
                <div class="card ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Sales</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal bergabung</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->kode_sales }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jns_kelamin }}</td>
                                    <td>{{ $item->tgl_bergabung }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6 ps-3">
                <h4 class="text-center fw-bold mb-3 mt-5 ">Data Barang</h4>
                <div class="card ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>Rp.{{ $item->harga_barang }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mb-5 ">
            <div class="col-6 pe-3">
                <h4 class="text-center fw-bold mb-3 mt-5 ">Header Penjualan</h4>
                <div class="card ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Sales</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Nominal Diskon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trh as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->kode_trx }}</td>
                                    <td>{{ $item->lokasi_trx }}</td>
                                    <td>{{ $item->sales->kode_sales }} - {{ $item->sales->nama }}</td>
                                    <td>{{ $item->tgl_trx }}</td>
                                    <td>{{ $item->nominal_diskon }}%</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6 ps-3">
                <h4 class="text-center fw-bold mb-3 mt-5 ">Detail Penjualan</h4>
                <div class="card ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode TRX</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">Harga Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trd as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->trx->kode_trx }}</td>
                                    <td>{{ $item->barang->kode_barang }} - {{ $item->barang->nama }}</td>
                                    <td>{{ $item->jml_barang }}</td>
                                    <td>Rp.{{ $item->harga_barang }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
