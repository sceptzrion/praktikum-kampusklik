<?php
include_once ("koneksi.php");

$keyword = "Tabel Data Mahasiswa";
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

if (isset($_POST["cari"])) {
    $cari = $_POST["cari"];

    if (!is_numeric($cari)) {
        echo "<script>
        alert('ERROR: NPM yang dicari harus angka');
        window.location.assign('index.php');
        </script>";
    } else {
        if (strlen($cari) < 13) {
            echo "<script>
            alert('ERROR: Digit NPM yang dimasukkan kurang dari 13 angka');
            window.location.assign('index.php');
            </script>";
        } else if (strlen($cari) > 13) {
            echo "<script>
            alert('ERROR: Digit NPM yang dimasukkan melebihi 13 angka');
            window.location.assign('index.php');
            </script>";
        } else {
            $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm LIKE '%$cari%'");
            $hasil_cari = mysqli_num_rows($result);
            $keyword = "Ditemukan $hasil_cari Hasil Pencarian untuk NPM \"$cari\"";
        }
    }
}