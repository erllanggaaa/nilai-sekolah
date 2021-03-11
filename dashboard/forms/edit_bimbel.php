<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Data bimbel Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nama bimbel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bimbel_nama" value="<?php echo $row['bimbel_nama']; ?>" placeholder="Nama bimbel" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="bimbel_alamat" placeholder="Alamat bimbel" required><?php echo $row['bimbel_alamat']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bimbel_telp" value="<?php echo $row['bimbel_telp']; ?>" placeholder="Telepon" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Visi</label>
                        <div class="col-sm-10">
                            <div >
                                <div class="widget-main no-padding">
                                    <textarea type="text" id="editor1" class="form-control" style="height: 300px;" name="bimbel_visi"><?php echo $row['bimbel_visi']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Misi</label>
                        <div class="col-sm-10">
                            <div >
                                <div class="widget-main no-padding">
                                    <textarea type="text" id="editor2" class="form-control" style="height: 300px;" name="bimbel_misi"><?php echo $row['bimbel_misi']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="bimbel-update">Update</button>
                            <button class="btn btn-warning"><a href="?akademik=bimbel">Batal</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>