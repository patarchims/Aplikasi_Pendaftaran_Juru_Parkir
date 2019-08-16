      <!--Responsive Table-->
      <div class="container">
      <div class="divider"></div>
            <div id="responsive-table">
              <h4 class="header">Daftar Pelamar Juru Parkir</h4>
              <div class="row">
                <div class="col s12">
                  
                </div>
                <div class="col s12">
                  <table class="responsive-table">
                    <thead>
                      <tr>
                        <th data-field="id">Nomor</th>
                        <th data-field="id">Photo</th>
                        <th data-field="name">NIK</th>
                        <th data-field="price">Nama</th>
                        <th data-field="total">Tempat Lahir</th>
                        <th data-field="status">Tanggal Lahir</th>
                        <th data-field="status">No HP</th>
                        <th data-field="status">Status Konfirmasi</th>
                        <th data-field="status">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php $i = 1; ?>
                      <?php foreach ( $pelamar as $row) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><img class="thumbnail" src="../img/photo/<?= $row["photo"]; ?>" height="60" />  </td>
                        <td><?= $row["nik"]; ?></td>                        
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["tmp_lahir"]; ?></td>
                        <td><?= $row["tgl_lahir"]; ?></td>
                        <td><?= $row["no_hp"]; ?></td>
                        <td><?= $row["satus_konfirmasi"]; ?></td>
                        <td><a  href="action/terima.php?nik=<?=$row["nik"]; ?>" class="waves-effect  blue lighten-2  btn white-text">Terima</a>
                        <a  href="action/tolak.php?nik=<?=$row["nik"]; ?>" class="waves-effect   red darken-1  btn white-text">Tolak</a>
                        </td>
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