
<?php
require 'function.php';

$nik= $_GET["nik"];

if( terima($nik) >0 ){
    echo mysqli_error($conn);
    echo "
            <script>
                alert('data berhasil diproses!');
                document.location.href = '../beranda.php?page=konfirmasi.php';
            </script>
        ";
}else{
    echo mysqli_error($conn);
    echo "
            <script>
                alert('data gagal diproses!');
                document.location.href = '../beranda.php?page=konfirmasi.php';
            </script>
        ";
}


?>