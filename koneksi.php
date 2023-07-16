<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_rumahsakit')
    or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values ('$idPasien', '$nmPasien', '$jk', '$alamat');");

    header('location:pasien.php');
}
if (isset($_POST['simpanuser'])) {
    $idUser = $_POST['idUser'];
    $nmUser = $_POST['nmUser'];
    $role = $_POST['role'];
    $koneksi->query("INSERT INTO users (idUser, nmUser, role) values ('$idUser', '$nmUser', '$role');");

    header('location:user.php');
}


if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");

    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET nmPasien='$nmPasien', jk='$jk', alamat='$alamat' WHERE idPasien='$idPasien'");

    header("location:pasien.php");
}
