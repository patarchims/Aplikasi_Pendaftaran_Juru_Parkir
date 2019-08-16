<?php
require '../../config/function.registrasi.php';




$pelamar = query("

SELECT konfirmasi.nik, pendaftaran.alamat, pendaftaran.nama, konfirmasi.satus_konfirmasi, pendaftaran.photo, pendaftaran.tmp_lahir, pendaftaran.tgl_lahir,  konfirmasi.satus_konfirmasi,
pendaftaran.no_hp,pendaftaran.kelamin from konfirmasi 
inner join pendaftaran on pendaftaran.nik=konfirmasi.nik
where konfirmasi.satus_konfirmasi='Di Tolak'
group by nik 

        ");
?>




 <!-- DataTales Example -->
 
                             
<!-- Modal -->

<!DOCTYPE html>
<html lang="en">


<head>
<style type="text/css" media="print">
    @page { 
        size: landscape;
    }
    
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrator</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" href="images/favicon/logo1.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/logo1.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/logo1.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../css//materialize.css" type="text/css" rel="stylesheet">
    <link href="../css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="../vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
</head>


            <div class="container">          
            <div class="card-body">
           
            <div class="navbar-fixed">
  
          <div class="nav-wrapper">
            <ul class="left">
        
                <h1 class="logo-wrapper">
                 <div class="brand-logo">
                      <div class=" py-3 d-flex align-items-center justify-content-between">                  
                        <img src="../../img/logo2.png"  alt="Tut Wuri">
                       
                        </div>
                        
                    </div>
                   
                  </a>
      
              
            </ul>
            <ul class="center">
            <center> <br>
            <h4 class="m-0 font-weight-bold text-primary black-text">LAPORAN DATA JURU PARKIR </h4> 
            <h4 class="m-0 font-weight-bold text-primary black-text">PADA DINAS PERHUBUNGAN KOTA PEMATANGSIANTAR  </h4>
            
            <h4 class="m-0 font-weight-bold text-primary"></h4>
            <br>
            <h4 class="m-0 font-weight-bold text-primary"></h4>
            </center>
            <ul>



  

  




           
            </div>  
              
               
              <div class="table-responsive">
              <table class="responsive-table">
                    <thead>
                      <tr>
                        <th data-field="id">Nomor</th>
                        <th data-field="name">NIK</th>
                        <th data-field="price">Nama</th>
                        <th data-field="total">Alamat</th>
                        <th data-field="status">Status Konfirmasi</th>
                        <th data-field="status">Jenis Kelamin</th>
                        <th data-field="status">Nomor HP</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php $i = 1; ?>
                      <?php foreach ( $pelamar as $row) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nik"]; ?> </td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td><?= $row["satus_konfirmasi"]; ?></td>
                        <td><?= $row["kelamin"]; ?></td>
                        <td><?= $row["no_hp"]; ?></td>
                        </tr>    
                      <?php $i++; ?>
                    <?php endforeach; ?>                  
                    </tbody>
                  </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
</div>

</body>

</html>