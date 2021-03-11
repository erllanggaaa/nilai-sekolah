                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Nilai
                                </div>
                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                    <div class="col-md-6 pull-left">
                                    <?php 
                                        $id  =   $_POST['id'];
                                        $tahun_id      =   $_POST['tahun_id'];
                                        $nilai   =   mysql_query("SELECT users.name, level.nm_level, pelajaran.pelajaran_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON nilai.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.id='$id' AND tahun.tahun_id='$tahun_id'
                                                                ORDER BY users.id ASC");
                                        $row    =   mysql_fetch_array($nilai);
                                    ?>
                                        <table width="100%">
                                            <tr>
                                                <td width="30%">Nama</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['name']; ?> </td>                                              
                                            </tr>
                                            <tr>
                                                <td width="30%">Level</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['nm_level']; ?> </td>                                              
                                            </tr>                                            
                                        </table>
                                    </div>
                                    <div class="col-md-6 pull-right">
                                        <table width="100%">
                                            <tr>
                                                <td width="30%">Tahun Ajaran</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['tahun_nama']; ?> </td>                                              
                                            </tr>
                                        </table>
                                    </div>
                                </div>    
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="45%">Mata Pelajaran</th>
                                            <th width="15%">Nilai</th>
                                            <th width="20%">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $tahun_id      =   $_POST['tahun_id'];
                                            $no     =   1; 
                                            $nilai1  =   mysql_query("SELECT nilai.nilai_id, users.name, level.nm_level, pelajaran.pelajaran_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON nilai.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.id='$id' AND tahun.tahun_id='$tahun_id'
                                                                ORDER BY users.name ASC");

                                            while ($data=mysql_fetch_array($nilai1)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['pelajaran_nama']; ?></td>
                                            <td><?php echo $data['nilai_poin']; ?></td>
                                            <?php
                                                if (60 <= $data['nilai_poin']) {
                                            ?>
                                            <td class="btn-azure">Naik Level</td>
                                            <?php
                                                 }else{
                                            ?>
                                            <td class="btn-danger">Ulang</td>
                                            <?php
                                                 } 
                                            ?>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div style="padding-top: 20px;">
                                    <table class="table table-hover">
                                        <thead class="bordered-darkorange">
                                        <?php
                                            $tahun_id      =   $_POST['tahun_id'];
                                            $nama   =   $_SESSION['name'];
                                            $rata   =   mysql_query("SELECT AVG(nilai.nilai_poin) AS poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON level.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.name='$nama' AND tahun.tahun_id='$tahun_id'                                                            
                                                                ORDER BY users.name ASC");
                                            $row1   =   mysql_fetch_array($rata);
                                            $poin   =   ROUND($row1['poin']);
                                        ?>
                                            <tr>
                                                <th width="60%">Rata-rata Nilai</th>
                                                <th width="5%" class="text-right">:</th>
                                                <th width="35%" class="btn-darkorange"><?php echo $poin; ?></th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div style="padding-top: 20px;margin-bottom: -30px;"><a href="?nilai=tampil" class="btn btn-purple">Kembali</a></div>                                   
                                </div>
                            </div>
                        </div>