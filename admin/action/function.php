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



function kelas_ubah($data){
    global $conn;
    $id =  ($data["id"]);
    $kdkelas = htmlspecialchars ($data["kdkelas"]);
    $nmkelas = htmlspecialchars ($data["nmkelas"]);


      //query insert data
      $jurusan = " UPDATE kelas SET
        nmkelas='$nmkelas', kdkelas= '$kdkelas'
        WHERE id= '$id'
      ";

    mysqli_query($conn, $jurusan);
    return mysqli_affected_rows($conn);
}



function terima($nik){
    global $conn;
    mysqli_query($conn, "UPDATE konfirmasi SET satus_konfirmasi='Di Terima'  WHERE nik= $nik");

    return mysqli_affected_rows($conn);
}

function tolak($nik){
    global $conn;
    mysqli_query($conn, "UPDATE konfirmasi SET satus_konfirmasi='Di Tolak'  WHERE nik= $nik");

    return mysqli_affected_rows($conn);
}



function kelas_tambah($data){
    global $conn;
    $kd_jurusan = htmlspecialchars ($data["kdkelas"]);
    $nmjurusan = htmlspecialchars($data["nmkelas"]);


    $karyawan = "INSERT INTO kelas
    VALUES
    (null,'$kd_jurusan','$nmjurusan')
    ";




    mysqli_query($conn, $karyawan);

    return mysqli_affected_rows($conn);
}

?>
