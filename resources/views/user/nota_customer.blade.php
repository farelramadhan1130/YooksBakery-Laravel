@php
use App\Models\Checkout;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
@endphp

<script>
    window.print();
    window.onfocus=function() {window.close();}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nota Pemesanan</title>
    <link rel="stylesheet" href="{{ asset ('asset/css/bootstrap.min.css') }}">
</head>
<body onload="window.print()">
<div class="table-responsive text-nowrap">
    <table>
        <tbody>
            <tr>
                <td>Yooks Bakery</td>
            </tr>
            <tr>
                <td>Jalan Melon No. 5B, Kec. Patrang, Kab. Jember</td>
            </tr>
            <tr>
                <td>Telp. 083857726588</td>
            </tr>
        </tbody>
    </table>

        <hr width="50%" align="left">

    <table>
        <tbody>
            <tr>
                <td>Id Pemesanan</td>
                <td>:</td>
                <td>{{ $notapenjualan->id }}</td>
            <tr>
                <td> Nama Pelanggan</td>
                <td>:</td>
                <td>{{ $notapenjualan->user->nama_user }}</td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td>:</td>
                <td>{{ $notapenjualan->user->telepon_user }}</td>
            </tr>
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td>{{ $notapenjualan->tanggal_penjualan }}</td>
            </tr>
            <tr>
                <td>Tanggal Pengambilan Pesanan</td>
                <td>:</td>
                <td>{{ $notapenjualan->tanggal_ambil_penjualan }}</td>
            </tr>
        </tbody>
    </table>
</br>
        <table class="table">
                    <thead>
                        <th>No.</th>
                        <th>Nama Roti</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @php $keuntungan = 0 @endphp
                    @foreach($produk as $key => $value)
                        @php
                            $keuntungan += ($value->harga_produk - $value->biaya_produk) * $value->jumlah_produk;
                        @endphp
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->nama_produk }}</td>
                            <td>Rp. {{ number_format($value->harga_produk) }}</td>
                            <td>{{ $value->jumlah_produk }}</td>
                            <td>Rp. {{ number_format($value->subtotal_produk) }}</td>
                        </tr>
                    @endforeach
                </tbody>

                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Total</b></td>
                        <td>Rp. {{ $notapenjualan->total_penjualan }}</td>
                    </tr>
                    </tfoot>
    </table>
    <br>
    <table>
        <tr>
            <td>Catatan :</td>
        </tr>
        <tr>
            <td>Simpan nota ini, kemudian tunjukkan kepada kami ketika mengambil pesanan</td>
        </tr>
    </table>
</div>
</body>