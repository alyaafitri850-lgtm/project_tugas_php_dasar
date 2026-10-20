<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm p-4">
            <h2 class="mb-4">Form Pesan</h2>

            <form action ="hasil_pesan.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" required>
                </div>

                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan / Kesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" name="tombol_kirim" class="btn btn-primary">Kirim Pesan</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>