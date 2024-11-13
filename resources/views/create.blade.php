<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Daster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Data Daster</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('daster.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_daster">Nama Daster</label>
                <input type="text" class="form-control" id="nama_daster" name="nama_daster" required>
            </div>
            <div class="form-group">
                <label for="ukuran">Ukuran</label>
                <input type="text" class="form-control" id="ukuran" name="ukuran" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('daster.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
