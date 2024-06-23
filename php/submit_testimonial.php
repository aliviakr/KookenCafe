<?php
include '../php/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $conn->real_escape_string($_POST['nama']);
    $testimoni = $conn->real_escape_string($_POST['testimoni']);

    $sql = "INSERT INTO testimoni (nama, testimoni) VALUES ('$nama', '$testimoni')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../html/index.php?success=Testimonial berhasil ditambahkan");
    } else {
        header("Location: ../html/index.php?error=Gagal menambahkan testimonial: " . $conn->error);
    }

    $conn->close();
} else {
    header("Location: ../html/index.php");
}
?>
