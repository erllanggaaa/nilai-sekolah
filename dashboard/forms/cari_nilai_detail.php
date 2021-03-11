<?php 
    if (isset($_POST['cari-nilai'])) {
        include('tables/nilai2_table.php');
    }else{
?>
<div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-lightred">
            <span class="widget-caption">Cari Nilai Form</span>
        </div>
        <div class="widget-body">
            <div id="horizontal-form">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <select id="e2" style="width:100%;" name="pelajaran_id" required>
                                <?php 
                                    $pelajaran  =   mysql_query("SELECT * FROM pelajaran");

                                    while ($data=mysql_fetch_array($pelajaran)) {
                                ?>
                                <option value="<?php echo $data['pelajaran_id']; ?>"><?php echo $data['pelajaran_nama']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Level</label>
                        <div class="col-sm-10">
                            <select id="e4" style="width:100%;" name="level_id" required>
                                <?php 
                                    $level  =   mysql_query("SELECT * FROM level");

                                    while ($data=mysql_fetch_array($level)) {
                                ?>
                                <option value="<?php echo $data['level_id']; ?>"><?php echo $data['nm_level']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Nama</label>
                        <div class="col-sm-10">
                            <select id="e5" style="width:100%;" name="id" required>
                                <?php 
                                    $users  =   mysql_query("SELECT * FROM users");

                                    while ($data=mysql_fetch_array($users)) {
                                ?>
                                <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">Tahun Ajaran</label>
                        <div class="col-sm-10">
                            <select id="e1" style="width:100%;" name="tahun_id" required>
                                <?php 
                                    $tahun  =   mysql_query("SELECT * FROM tahun");

                                    while ($data=mysql_fetch_array($tahun)) {
                                ?>
                                <option value="<?php echo $data['tahun_id']; ?>"><?php echo $data['tahun_nama']; ?></option>
                                <?php
                                    }
                                ?>                                                                
                            </select>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="cari-nilai">Cari</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>