<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 style="text-align: center;">Kelola Pelanggan</h2>

    <table class="mt-5 table">
        <tr>
            <td>User ID</td>
            <td>device_UID</td>
            <td>Nama</td>
            <td>No Handphone</td>
            <td >Email</td>
            <td >Alamat</td>
            <td >Kota</td>
            <td >Provinsi</td>
            <td colspan="2" style="text-align: center;column-width: auto;" >Action</td>
            <!-- <td style="text-align: center;">Action</td> -->
        </tr>
        @foreach($pelanggan as $j)
        <tr>
            <td>{{$j->pelanggan_id}}</td>
            <td>{{$j->device_UID}}</td>
            <td>{{$j->pelanggan_name}}</td>
            <td>{{$j->pelanggan_phone}}</td>
            <td>{{$j->pelanggan_email}}</td>
            <td>{{$j->pelanggan_alamat}}</td>
            <td>{{$j->pelanggan_kota}}</td>
            <td>{{$j->pelanggan_provinsi}}</td>

            <td style="column-width: auto;">
                <div class="text-center">
                    <a type="button" class="btn btn-secondary text-center" href='/admin/admin/kelolaPelanggan/edit_pelanggan/{{$j->pelanggan_id}}'>Edit</a>
                </div>
                <div class="text-center">
                    <form action="/admin/admin/kelolaPelanggan/delete/{{$j->pelanggan_id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger text-center" type="submit" value="Delete">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </table>
    <div class="text-center">
        <a type="button" class="btn btn-primary text-center" href='/admin/admin/kelolaPelanggan/tambah_pelanggan'>Tambah Data Pelanggan</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>