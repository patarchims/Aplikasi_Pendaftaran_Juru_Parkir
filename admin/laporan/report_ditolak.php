      <!--Responsive Table-->
      
      
      <div class="container">
      <div class="divider"></div>
            <div id="responsive-table">
              <h4 class="header align-center">Laporan Data Juru Parkir</h4>
              <a target="blank" href="laporan/cetak_report_tolak.php"  class="btn waves-effect waves-light cyan">Cetak</a></p>
              <div class="row">
                <div class="col s12">
                  
                </div>
                <div class="col s12">
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
                      <?php foreach ( $pelamar_tolak as $row) : ?>
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
          </div>