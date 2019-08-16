
          
          
          
          <div class="container">            
         




            
            
           


            <!--start container-->
       
              </div>
              <div class="col s12">
                <div class="row">
    
                  
                  <div class="col s12 m4 l12">
                  
                    <div class="card-panel gradient-45deg-red-pink gradient-shadow">
                    <p class="caption white-text"><h5 class="white-text">Status Konfirmasi</h5> </p>
                     
                    
                    <span class="white-text">
                    
                       <?php

                     
$hasil= $konfirmasi["satus_konfirmasi"]; 

if ( $hasil=="Menunggu"){
  echo "Silahkan Menunggu";
  echo "
  <p>Jika data diri anda sudah di isi dengan benar, kirim kan berkas anda ke Dinas Perhubungan Kota Pematangsiantar</p>
  <p>Dengan Persyaratan Berikut ini:</p>
 
  <h6>1. Usia min 18-45 tahun</h6>    
  <h6>2. Pas photo 3*4 1 lembar dan 4*6 1 lembar berwarna </h6>
  <h6>3. Fotocopy KTP 1 lembar </h6>
  <h6>4. Fotocopy KK 1 lembar </h6>
  <h6>5. Surat keterangan kesehatan</h6>
    
  
  ";
} elseif ($hasil=="Di Terima") {
  echo "<h4> Selamat Anda Diterima</h4>";
  echo "<h6> Anda diterima sebagai juru parkir kota pematangsiantar</h6>";
} else { 
  
  echo "Maaf, Anda Di Tolak";
  
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