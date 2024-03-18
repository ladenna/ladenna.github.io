<?php

// Persiapan function untuk upload file/foto
function upload()
{
    // Deklarasi variabel kebutuhan
    $namafile = $_FILES['file']['name'];
    $ukuranfile = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $tmpname = $_FILES['file']['tmp_name'];

    // Cek apakah ada file yang diupload
    if ($error === 4) {
        echo "<script> alert('Silakan pilih file yang akan diupload!') </script>";
        return false;
    }

    // Cek apakah yang diupload adalah file/gambar
    $eksfilevalid = ['jpg', 'jpeg', 'png', 'pdf'];
    $eksfile = explode('.', $namafile);
    $eksfile = strtolower(end($eksfile));
    if (!in_array($eksfile, $eksfilevalid)) {
        echo "<script> alert('Yang anda Upload bukan Gambar/File PDF..!') </script>";
        return false;
    }

    // Cek jika ukuran file terlalu besar
    if ($ukuranfile > 1000000) {
        echo "<script> alert('Ukuran file anda terlalu besar!') </script>";
        return false;
    }

    // Jika lolos pengecekan, file siap diupload
    // Generate nama file baru
    $namafilebaru = uniqid() . '.' . $eksfile;

    // Tambahkan pengecekan untuk memastikan file berhasil diupload
    if (move_uploaded_file($tmpname, 'file/' . $namafilebaru)) {
        return $namafilebaru;
    } else {
        echo "<script> alert('Terjadi kesalahan saat mengupload file!') </script>";
        return false;
    }
}

?>
