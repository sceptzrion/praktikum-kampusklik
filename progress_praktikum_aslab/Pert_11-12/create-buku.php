<?php
    include_once("./connect.php");

    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES(
            NULL, '$nama', '$isbn', '$unit'
        )");

        echo
            "<script>
                alert('Buku berhasil ditambahkan')
            </script>";

        header("Location: ./buku.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Tambah buku</h1>

        <form method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input required name="nama" type="text" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input required name="isbn" type="text" class="form-control" id="isbn">
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input required name="unit" type="number" class="form-control" id="unit">
        </div>
        <button required name="submit" type="submit" class="btn btn-primary">Tambah</button>
        </form>
        <br>

        <a class="btn btn-warning" href="./buku.php">Kembali</a>
        
        <a class="btn btn-danger" href="./index.php">Kembali ke halaman utama</a>
    </div>
</body>
</html>