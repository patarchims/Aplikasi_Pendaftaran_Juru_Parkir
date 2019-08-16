    <!-- START CONTENT -->
    <section id="content">
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <!-- Search for small screen -->
          <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
          </div>
          <div class="container">
            <div class="row">
              
                <center>
                <h3 >Selamat Datang Di Sistem Informasi Pendaftaran Juru Parkir Online Pada Dinas Perhubungan Kota Pematangsiantar</h2>
                </center>
                
                  
                </ol>
              </div>
              
            </div>
          </div>          
        </div>

        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
              <div class="row mt-1">
                
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">perm_identity</i>
                        <p>Jumlah Pelamar</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0">

                        <?php
                  if ( !$jumlah){
                    echo "             
                    0";			
                  }
                  else{
                    $jumlah = query("
                    SELECT count(nik) as jumlah
                    from pendaftaran
                    group by nik
                     ")[0];
                    echo $jumlah["jumlah"];  
                                     
                  }
                      ?>           

                       </h5>
                        <p class="no-margin">Orang</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              
              
              </div>
            </div>

        
        <div class="divider"></div>
          <!--Basic Card-->
          <div id="basic-card" class="section">
            <h4 class="header"></h4>
            <div class="row">
              <div class="col s12">
         
              </div>
              
              </div>
            </div>
          </div>

        