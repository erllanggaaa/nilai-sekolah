                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Nilai
                                </div>
                                <div class="col-lg-12" style="padding-bottom: 20px;">
                                    <div class="col-md-6 pull-left">
                                        <table width="100%">
                                            <tr>
                                                <?php
                                                    $pelajaran  =   $_POST['pelajaran']; 
                                                    $sql  =   mysql_query("SELECT * FROM pelajaran WHERE pelajaran_id=$pelajaran");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">Subjek</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['pelajaran_nama']; ?> </td>                                              
                                            </tr>
                                            <tr>
                                                <?php
                                                    $level  =   $_POST['level']; 
                                                    $sql  =   mysql_query("SELECT * FROM level WHERE level_id=$level");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">Level</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['nm_level']; ?> </td>                                              
                                            </tr>                                            
                                        </table>
                                    </div>
                                    <div class="col-md-6 pull-right">
                                        <table width="100%">
                                            <tr>
                                                <?php
                                                    $users		=   $_POST['users']; 
                                                    $sql        =   mysql_query("SELECT * FROM users WHERE id=$users");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">Nama</td>  
                                                <td width="5%"> : </td> 
                                                <td width="65%"> <?php echo $row['name']; ?> </td>                                              
                                            </tr>
                                            <tr>
                                                <?php
                                                    $tahun   =   $_POST['tahun']; 
                                                    $sql        =   mysql_query("SELECT * FROM tahun WHERE tahun_id=$tahun");
                                                    $row        =   mysql_fetch_array($sql);
                                                ?>
                                                <td width="30%">tahun</td>  
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
                                            <th width="45%">Subjek</th>
                                            <th width="15%">Level</th>
                                            <th width="15%">Nilai</th>
                                            <th width="20%">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form role="form" method="post">
                                            <?php
                                                
                                                if(isset($_POST['input-nilai'])) {
                                                    
                                                    $no = 1;
                                                    $level      =   $_POST['level'];
                                                    $pelajaran  =   $_POST['pelajaran'];
                                                    $tahun      =   $_POST['tahun'];
                                                    $access     =   'siswa'; 
                                                    $nilai        =   $_POST['nilai'];
                                                    $sql = mysql_query("SELECT users.id, users.name, users.access, level.level_id, level.nm_level
                                                                        FROM users
                                                                        INNER JOIN level ON users.id=level.nm_level
                                                                        WHERE level.level_id='$level' AND users.access='$access'
                                                                        ");
                                                    while ($data=mysql_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td>
                                                    <input type="hidden" class="form-control" name="name[]" id="name[]" value="<?php echo $data['id']; ?>">
                                                    <?php 
                                                        echo $data['name'];
                                                    ?>
                                                    <input type="hidden" name="pelajaran[]" id="pelajaran[]" value="<?php echo "$pelajaran"; ?>">
                                                    <input type="hidden" name="jenis[]" id="jenis[]" value="<?php echo "$jenis"; ?>">
                                                    <input type="hidden" name="tahun[]" id="tahun[]" value="<?php echo "$tahun"; ?>">
                                                    <input type="hidden" name="kkm[]" id="kkm[]" value="<?php echo "$kkm"; ?>">
                                                </td>
                                                <td><?php echo $kkm; ?></td>
                                                <td>
                                                    <input type="text" class="form-control" name="nilai[]" id="nilai[]" />
                                                </td>
                                            </tr>
                                            <?php 
                                                $no++;  
                                                }
                                            ?>      
                                            <tr>
                                                <td colspan="4" align="right" valign="baseline"><button type="submit" class="btn btn-success" name="input-proses"><span class="fa fa-gear"></span> Proses</button></td>
                                            </tr>
                                        </form>
                                        <?php 
                                            }
                                        ?>                                                                           
                                    </tbody>
                                </table>
                                <div style="padding-top: 20px;">
                                    <div style="padding-top: 20px;margin-bottom: -30px;"><a href="?nilai=input" class="btn btn-purple">Kembali</a></div>                                   
                                </div>
                            </div>
                        </div>