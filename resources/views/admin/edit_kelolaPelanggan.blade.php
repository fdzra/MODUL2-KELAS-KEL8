<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Edit Jadwal</h1>
    <form action="/admin/admin/kelolaPelanggan/{{$pelanggan->id}}" method="POST">
    @method('put')
    @csrf

    <div class="mb-3 text-center">
        <label for="device_UID" class="form-label">Device UID</label>
        <input type="text" class="form-control" name="device_UID" placeholder="Device UID" value="{{$pelanggan->id_perangkat}}">
    </div>

    <div class="mb-3 text-center">
        <label for="pelanggan_name" class="form-label">Nama</label>
        <input type="text" class="form-control" name="pelanggan_name" placeholder="Nama" value="{{$pelanggan->pelanggan_name}}">
    </div>

    <div class="mb-3 text-center">
        <label for="pelanggan_phone" class="form-label">No Handphone</label>
        <input type="text" class="form-control" name="pelanggan_phone" placeholder="No Handphone" value="{{$pelanggan->pelanggan_phone}}">
    </div>

    <div class="mb-3 text-center">
        <label for="pelanggan_email" class="form-label">Email</label>
        <input type="email" class="form-control" name="pelanggan_email" placeholder="Email" value="{{$pelanggan->pelanggan_email}}">
    </div>

    <div class="mb-3 text-center">
        <label for="pelanggan_alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="pelanggan_alamat" placeholder="Alamat" value="{{$pelanggan->pelanggan_alamat}}">
    </div>

    <div class="mb-3 text-center">
        <label for="pelanggan_kota" class="form-label">Kota</label>
        <input type="text" class="form-control" name="pelanggan_kota" placeholder="Kota" value="{{$pelanggan->pelanggan_kota}}">
    </div>

    <div class="mb-3 text-center">
        <label for="pelanggan_provinsi" class="form-label">Provinsi</label>
        <input type="text" class="form-control" name="pelanggan_provinsi" placeholder="Provinsi" value="{{$pelanggan->pelanggan_provinsi}}">
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>