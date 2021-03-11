<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Admin Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Status</label>
                        <div class="col-sm-10">
                            <select id="e1" style="width:100%;" name="status" required>
                                <?php
                                                if($row['status'] == 'Menikah'){
                                                    echo "<option selected value='Menikah'>Menikah</option>
                                                            <option value='Belum Menikah'>Belum Menikah</option>";
                                                }else if($row['status'] == 'Belum Menikah'){
                                                    echo "<option selected value='Belum Menikah'>Belum Menikah</option>
                                                            <option value='Menikah'>Menikah</option>";
                                                }else{
                                                    echo "error";
                                                }
                                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telp" value="<?php echo $row['telp']; ?>" placeholder="Telepon" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Kelamin</label>
                        <div class="col-sm-10">
                            <select id="e2" style="width:100%;" name="jenis_kelamin" required>
                                <?php
                                                if($row['jenis_kelamin'] == 'Laki-Laki'){
                                                    echo "<option selected value='Laki-Laki'>Laki-Laki</option>
                                                            <option value='Perempuan'>Perempuan</option>";
                                                }else if($row['jenis_kelamin'] == 'Perempuan'){
                                                    echo "<option selected value='Perempuan'>Perempuan</option>
                                                            <option value='Laki-Laki'>Laki-Laki</option>";
                                                }else{
                                                    echo "error";
                                                }
                                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="alamat" required><?php echo $row['alamat']; ?></textarea>
                        </div>
                    </div><hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="admin-update">Update</button>
                            <button class="btn btn-warning"><a href="?users=admin">Batal</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>