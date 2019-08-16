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



function registrasi($data){
    global $conn;
    $nik = htmlspecialchars ($data["nik"]);
    $nama= htmlspecialchars($data["nama"]);
    $password= htmlspecialchars($data["password"]);
    $jabatan = "INSERT INTO registrasi
    VALUES
    (null,'$nik','$nama','$password')
    ";

    mysqli_query($conn, $jabatan);
    return mysqli_affected_rows($conn);
}


function registrasi_tambah($data){
    global $conn;
    $nik = htmlspecialchars ($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $photo = htmlspecialchars($data["photo"]);
    $kelamin = htmlspecialchars($data["kelamin"]);
    $tmp_lahir = htmlspecialchars($data["tmp_lahir"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
    $provinsi = htmlspecialchars($data["provinsi"]);
    $kode_pos = htmlspecialchars($data["kode_pos"]);
    $no_hp = htmlspecialchars($data["no_hp"]);




    $pendaftaran = "INSERT INTO pendaftaran
    VALUES
    (null,'$nik','$nama','$photo','$kelamin','$tmp_lahir','$tgl_lahir','$alamat','$kota','$provinsi','$kode_pos','$no_hp')
    ";




    mysqli_query($conn, $pendaftaran);

    return mysqli_affected_rows($conn);
}


function upload_tambah($data){
    global $conn;
    $nik = $_SESSION['nik'];
    $ktp = htmlspecialchars($data["ktp"]);
    $kk = htmlspecialchars($data["kk"]);
    $surat_sehat = htmlspecialchars($data["surat_sehat"]);
    

    $berkas = "INSERT INTO berkas
    VALUES
    (null,'$nik','$ktp','$kk','$surat_sehat')
    ";

    mysqli_query($conn, $berkas);
    return mysqli_affected_rows($conn);

}


function upload_update($data){
    global $conn;
    $nik = $_SESSION['nik'];
    $ktp = htmlspecialchars($data["ktp"]);
    $kk = htmlspecialchars($data["kk"]);
    $surat_sehat = htmlspecialchars($data["surat_kesehatan"]);
    
    $update_upload = " UPDATE berkas SET
    ktp= '$ktp', kk= '$kk', surat_kesehatan= '$surat_sehat'
    
    WHERE nik= '$nik'
  ";


    mysqli_query($conn, $update_upload);
    return mysqli_affected_rows($conn);

}


function registrasi_update($data){
    global $conn;
    $nik = htmlspecialchars ($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $photo = htmlspecialchars($data["photo"]);
    $kelamin = htmlspecialchars($data["kelamin"]);
    $tmp_lahir = htmlspecialchars($data["tmp_lahir"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
    $provinsi = htmlspecialchars($data["provinsi"]);
    $kode_pos = htmlspecialchars($data["kode_pos"]);
    $no_hp = htmlspecialchars($data["no_hp"]);


    
    $update_registrasi = " UPDATE pendaftaran SET
    nama= '$nama', photo= '$photo', kelamin= '$kelamin', tmp_lahir= '$tmp_lahir', alamat= '$alamat',kota= '$kota'
    ,provinsi= '$provinsi', kode_pos= '$kode_pos',no_hp= '$no_hp'
    WHERE nik= '$nik'
  ";



    




    mysqli_query($conn, $update_registrasi );

    return mysqli_affected_rows($conn);
}


function konfirmasi($data){
    global $conn;
    $nik = htmlspecialchars ($data["nik"]);    

    
    $konfirmasi = "INSERT INTO konfirmasi
    VALUES
    (null,'$nik','Menunggu')
    ";


    mysqli_query($conn, $konfirmasi);

    return mysqli_affected_rows($conn);
}


?>