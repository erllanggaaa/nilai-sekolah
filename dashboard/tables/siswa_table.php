                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Siswa
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Telepon</th>
                                            <th>Status</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $siswa  =   mysql_query("SELECT * FROM users WHERE access='siswa' ORDER BY name DESC");

                                            while ($data=mysql_fetch_array($siswa)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['id']; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['telp']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['jenis_kelamin']; ?></td>
                                            <td>
                                                <a href="?siswa-edit=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?siswa-del=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?users=siswa-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>