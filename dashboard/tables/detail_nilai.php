                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Nama Siswa
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>level</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $nilai  =   mysql_query("SELECT nilai.nilai_id, nilai.nilai_poin, level.no_level, users.name, users.access, users.id 
                                                                        FROM nilai 
                                                                        INNER JOIN users ON nilai.id=users.id 
                                                                        INNER JOIN level ON users.level=level.level 
                                                                        WHERE users.access='siswa' 
                                                                        GROUP BY name
                                                                        ORDER BY no_level ASC");

                                            while ($data=mysql_fetch_array($nilai)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['no_level']; ?></td>
                                            <td>
                                                <a href="?nilai-detail=<?php echo $data['id']; ?>" class="btn btn-success">Detail</a> 
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?users=admin-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>