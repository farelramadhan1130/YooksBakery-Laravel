@if (!empty($cartItems) && count($cartItems) > 0)
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item->produk->nama_produk }}</td>
                    <td>
                        <form action="{{ route('cart.update', $item->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>{{ $item->produk->jual_produk }}</td>
                    <td>{{ $item->produk->jual_produk * $item->quantity }}</td>
                    <td>
                        <form action="{{ route('cart.destroy', $item) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Keranjang anda kosong.</p>
@endif

<p>Total: {{ $totalPrice }}</p>

<form action="{{ route('cart.store') }}" method="post">
    @csrf
    <label for="id_produk">Product:</label>
    <select name="id_produk" id="id_produk">
        @foreach ($produkItems as $produk)
            <option value="{{ $produk->id_produk }}">{{ $produk->nama_produk }}</option>
        @endforeach
    </select>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" value="1" min="1">
    <button type="submit">Add to Cart</button>
</form>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    form {
        display: inline;
    }
</style>
