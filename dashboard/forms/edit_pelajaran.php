<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Mata Pelajaran Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pelajaran_nama" value="<?php echo $row['pelajaran_nama']; ?>" placeholder="Mata Pelajaran" required>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="pelajaran-update">Update</button>
                            <button class="btn btn-warning"><a href="?akademik=pelajaran">Batal</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>