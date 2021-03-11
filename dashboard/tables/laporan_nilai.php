                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Laporan Nilai Keseluruhan
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Siswa</th>
                                            <th>Level</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $nilai  =   mysql_query("SELECT users.name, level.nm_level, pelajaran.pelajaran_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON nilai.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.id
                                                                ORDER BY users.id ASC");

                                            while ($data=mysql_fetch_array($nilai)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['nm_level']; ?></td>
                                            <td><?php echo $data['pelajaran_nama']; ?></td>
                                            <td><?php echo $data['tahun_nama']; ?></td>
                                            <td><?php echo $data['nilai_poin']; ?></td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                            </div>
                            </div>
                        </div>