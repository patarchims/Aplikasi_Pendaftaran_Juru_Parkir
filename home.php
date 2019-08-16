
          
          
          
          <div class="container">
            <p class="caption"> <h4>Selamat Datang <?php echo $_SESSION['nama']; ?>, 
            
            
          <?php
          if ( $daftar){
             echo "             
             Data Anda Sudah Lengkap";
             
          }else{
            echo "
            Data Anda Belum Lengkap <br>
            Silahkan Lengkapi Terlebih Dahulu <br>    
            ";
            echo "<a target='blank'  href='data_diri.php?nik=$nik' class='waves-effect waves-light  btn'>Data Diri</a> </p>"
            ;
          }

            ?>
          




            
            
           


            <!--start container-->
       
              </div>
              <div class="col s12">
                <div class="row">
                  <div class="col s12 m4 l6">
                    <div class="card-panel yellow darken-4">
                      <span class="white-text"> <h5>Persyaratan</h4> </span>
                      <p>Jika data diri anda sudah di isi dengan benar, kirim kan berkas anda ke Dinas Perhubungan Kota Pematangsiantar</p>
                  <p>Dengan Persyaratan Berikut ini:</p>
                 
                <h6>1. Usia min 18-45 tahun</h6>    
                <h6>2. Pas photo 3*4 1 lembar dan 4*6 1 lembar berwarna </h6>
                <h6>3. Fotocopy KTP 1 lembar </h6>
                <h6>4. Fotocopy KK 1 lembar </h6>
                <h6>5. Surat keterangan kesehatan</h6>
               
                    </div>
                  </div>
                  
                  <div class="col s12 m4 l6">
                  
                    <div class="card-panel gradient-45deg-red-pink gradient-shadow">
                    <p class="caption white-text"><h5 class="white-text">Status Konfirmasi</h5> </p>
                     
                   
                    <span class="white-text">
                    
                       <?php

                     
$hasil= $konfirmasi["satus_konfirmasi"]; 

if ( $hasil=="Menunggu"){
  echo " <span class='white-text'>Data Anda Akan Diproses Paling Lama seminggu setelah melakukan pengiriman berkas dan pengisian data diri Anda.</span><br> <br>";
  echo "<a  href='beranda.php?page=status_konfirmasi.php' class='waves-effect waves-light  btn'>Silahkan Menunggu</a> </p>";
 
} elseif ($hasil=="Di Terima") {
  echo "<a  href='beranda.php?page=status_konfirmasi.php' class='waves-effect waves-light  btn'>Selamat Anda Diterima</a> </p>";
} else {
  echo "<a  href='beranda.php?page=status_konfirmasi.php' class='waves-effect waves-light  btn'>Maaf Anda Ditolak</a> </p>";
}


                      ?>

                    
                    
                    </span><br> <br>


                      









                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="divider"></div>