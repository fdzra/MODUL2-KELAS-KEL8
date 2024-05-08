<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Tambah Data Pelanggan</h1>
    <form action="/jadwal_store" method="POST">
        @csrf
        <!-- <input type="text" name='id' placeholder="Masukkan Id"><br> -->
        <div class="mb-3 text-center">
            <label for="form-label">Kota Keberangkatan</label>
            <div class="d-flex justify-content-center">
                <input style="width: 500px;" class="form-control text-center" type="text" name='keberangkatan' placeholder="Masukkan Kota Keberangkatan" required><br>
            </div>   
        </div>

        <div class="mb-3 text-center">
            <label for="form-label">Kota Tujuan</label>
            <div class="d-flex justify-content-center">
                <input style="width: 500px;" class="form-control text-center" type="text" name='tujuan' placeholder="Masukkan Kota Tujuan" required><br>
            </div>   
        </div>

        <div class="mb-3 text-center">
            <label for="form-label">Jam Keberangkatan</label>
            <div class="d-flex justify-content-center">
                <input style="width: 500px;" class="form-control text-center" type="time" name='jam' placeholder="Masukkan jam keberangkatan" required><br>
            </div>   
        </div>

        <div class="mb-3 text-center">
            <label for="form-label">Tanggal Keberangkatan</label>
            <div class="d-flex justify-content-center">
                <input style="width: 500px;" class="form-control text-center" type="date" name='tanggal' placeholder="Masukkan tanggal keberangkatan" required><br>
            </div>   
        </div>
        <div class="d-flex justify-content-center">
            <input class="btn btn-primary" type="submit" name="submit" value="Confirm">
        </div>
        <!-- <input type="text" name='keberangkatan' placeholder="Masukkan Kota Keberangkatan"><br>
        <input type="text" name='tujuan' placeholder="Masukkan Kota Tujuan"><br>
        <input type="time" name='jam' placeholder="Masukkan jam keberangkatan"><br>
        <input type="date" name='tanggal' placeholder="Masukkan tanggal keberangkatan"><br> -->
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>