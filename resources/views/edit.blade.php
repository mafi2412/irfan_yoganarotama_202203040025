<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Daster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Data Daster</h1>

        <!-- Menampilkan pesan error validasi jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk mengupdate data daster -->
        <form action="{{ route('daster.update', $daster->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan metode PUT untuk update -->
            
            <div class="form-group">
                <label for="nama_daster">Nama Daster</label>
                <input type="text" class="form-control" id="nama_daster" name="nama_daster" value="{{ old('nama_daster', $daster->nama_daster) }}" required>
            </div>

            <div class="form-group">
                <label for="ukuran">Ukuran</label>
                <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{ old('ukuran', $daster->ukuran) }}" required>
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok', $daster->stok) }}" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $daster->harga) }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $daster->deskripsi) }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('daster.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
