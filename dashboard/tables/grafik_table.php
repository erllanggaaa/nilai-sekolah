                        <div class="col-xs-12 col-md-12">
                            <div class="well with-header  with-footer">
                                <div class="header bg-blue">
                                    Grafik Nilai
                                </div>
                                <div style="width: 800px;margin: 0px auto;">
                                    <canvas id="myChart"></canvas>
                                </div>
                                <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php $nilai   =   mysql_query("SELECT users.name, level.nm_level, pelajaran.pelajaran_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON nilai.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.id='".$_SESSION["id"]."' AND pelajaran.pelajaran_id='1'
                                                                ORDER BY nilai.nilai_poin DESC");
                                        while ($row=mysql_fetch_array($nilai)) { ?>

                                        "<?php echo $row['name']; ?> (<?php echo $row['tahun_nama']; ?>)",<?php } ?>],
                datasets: [{
                    label: 'Grafik Nilai Matematika',
                    data: [
                    <?php $nilai2   =   mysql_query("SELECT users.name, level.nm_level, pelajaran.pelajaran_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON nilai.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.id='".$_SESSION["id"]."' AND pelajaran.pelajaran_id='1'
                                                                ORDER BY nilai.nilai_poin DESC");
                                        while ($row=mysql_fetch_array($nilai2)) { ?>
                                        "<?php echo $row['nilai_poin']; ?>",<?php } ?>
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
    <br>
    <br>
                                    <div style="width: 800px;margin: 0px auto;">
                                    <canvas id="myChart2"></canvas>
                                </div>
                                <script>
        var ctx = document.getElementById("myChart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php $nilai   =   mysql_query("SELECT users.name, level.nm_level, pelajaran.pelajaran_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON nilai.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.id='".$_SESSION["id"]."' AND pelajaran.pelajaran_id='2'
                                                                ORDER BY nilai.nilai_poin DESC");
                                        while ($row=mysql_fetch_array($nilai)) { ?>

                                        "<?php echo $row['name']; ?> (<?php echo $row['tahun_nama']; ?>)",<?php } ?>],
                datasets: [{
                    label: 'Grafik Nilai Bahasa Inggris',
                    data: [
                    <?php $nilai2   =   mysql_query("SELECT users.name, level.nm_level, pelajaran.pelajaran_nama, tahun.tahun_nama, nilai.nilai_poin 
                                                                FROM nilai 
                                                                INNER JOIN users ON nilai.id=users.id 
                                                                INNER JOIN level ON nilai.level_id=level.level_id 
                                                                INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id 
                                                                INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id 
                                                                WHERE users.id='".$_SESSION["id"]."' AND pelajaran.pelajaran_id='2'
                                                                ORDER BY nilai.nilai_poin DESC");
                                        while ($row=mysql_fetch_array($nilai2)) { ?>
                                        "<?php echo $row['nilai_poin']; ?>",<?php } ?>
                    ],
                    backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>


                            </div>
                        </div>