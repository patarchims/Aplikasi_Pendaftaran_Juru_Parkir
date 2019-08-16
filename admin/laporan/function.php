<?php
$conn= mysqli_connect("localhost","root","","db_parkir");



function query($query){
    global $conn; 
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row =mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function cari($keyword) {
    $query =" 
    

    SELECT konfirmasi.nik, pendaftaran.alamat, pendaftaran.nama, konfirmasi.satus_konfirmasi, pendaftaran.photo, pendaftaran.tmp_lahir, pendaftaran.tgl_lahir,  konfirmasi.satus_konfirmasi,
      pendaftaran.no_hp,pendaftaran.kelamin from konfirmasi 
      inner join pendaftaran on pendaftaran.nik=konfirmasi.nik
                       
    where konfirmasi.satus_konfirmasi like  '%$keyword%' 
    group by nik 

    ";

    return query($query);
}


?>