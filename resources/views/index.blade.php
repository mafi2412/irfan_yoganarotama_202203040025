<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Daster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Daster</h1>
        <a href="{{ route('daster.create') }}" class="btn btn-primary mb-3">Tambah Daster</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Daster</th>
                    <th>Ukuran</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daster as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_daster }}</td>
                    <td>{{ $item->ukuran }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('daster.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('daster.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
