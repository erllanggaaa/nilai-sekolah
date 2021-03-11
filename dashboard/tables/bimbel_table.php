                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Data Bimbel
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bimbel</th>
											<th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $bimbel  =   mysql_query("SELECT * FROM bimbel ORDER BY bimbel_nama ASC");

                                            while ($data=mysql_fetch_array($bimbel)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['bimbel_nama']; ?></td>
                                            <td><?php echo $data['bimbel_alamat']; ?></td>
                                            <td><?php echo $data['bimbel_telp']; ?></td>
                                            <td>
                                                <a href="?bimbel-edit=<?php echo $data['bimbel_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?bimbel-del=<?php echo $data['bimbel_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?akademik=bimbel-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>