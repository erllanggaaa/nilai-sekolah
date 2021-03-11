                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Level
                                </div>
                                <table class="table table-hover">
                                    <thead class="bordered-darkorange">
                                        <tr>
                                            <th>No</th>
                                            <th>Level</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php
                                            $no     =   1; 
                                            $level  =   mysql_query("SELECT * FROM level ORDER BY level_id ASC");

                                            while ($data=mysql_fetch_array($level)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['nm_level']; ?></td>
                                            <td>
                                                <a href="?level-edit=<?php echo $data['level_id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="?level-del=<?php echo $data['level_id']; ?>" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                        <?php
                                            $no++;
                                            }                                            
                                        ?>                                                                                
                                    </tbody>
                                </table>

                                <div class="footer">
                                    <a href="?akademik=level-create" class="btn btn-primary">Create</a>
                                </div>
                            </div>
                        </div>