<?php
require 'function.php';
// Variable untuk menampung id yang di ambil dari database
$id = $_GET["id"];

if(hapusData($id) > 0){
    echo "<script>
    alert ('data berhasil dihapus');
    document.location.href='menu.php';
    </script>";
} else {
    // echo "Data gagal ditambahkan";
    echo "<script>
    alert ('data gagal dihapus');
    document.location.href='menu.php';
    </script>";
}
?>