<?php
    include_once("./connect.php");

    $id = $_GET["id"];
    $get_buku = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($get_buku);

    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit='$unit' WHERE id='$id'");

        echo
            "<script>
                alert('Buku berhasil diperbarui')
            </script>";

        header("Location: ./buku.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Edit buku</h1>

        <form method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input required name="nama" type="text" class="form-control" id="nama" value="<?php echo $buku['nama'] ?>">
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input required name="isbn" type="text" class="form-control" id="isbn" value="<?php echo $buku['isbn'] ?>">
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input required name="unit" type="number" class="form-control" id="unit" value="<?php echo $buku['unit'] ?>">
        </div>
        <button required name="submit" type="submit" class="btn btn-primary">Edit</button>

        <a class="btn btn-warning" href="./buku.php">Kembali</a>
        </form>
    </div>
</body>
</html>