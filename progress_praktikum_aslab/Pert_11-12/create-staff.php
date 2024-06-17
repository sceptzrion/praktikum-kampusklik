<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES(
            NULL, '$nama', '$telp', '$email'
        )");

        echo
            "<script>
                alert('Staff berhasil ditambahkan')
            </script>";

        header("Location: ./staff.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Tambah Staff</h1>

        <form method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input required name="nama" type="text" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="telp" class="form-label">Telepon</label>
            <input required name="telp" type="text" class="form-control" id="telp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input required name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <button required name="submit" type="submit" class="btn btn-primary">Tambah</button>
        </form>
        <br>

        <a class="btn btn-warning" href="./staff.php">Kembali</a>
        
        <a class="btn btn-danger" href="./index.php">Kembali ke halaman utama</a>
    </div>
</body>
</html>