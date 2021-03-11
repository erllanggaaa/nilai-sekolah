<?php
	//Admin Edit 
	if (isset($_GET['admin-edit'])) {
		$id 	=	$_GET['admin-edit'];

		if (isset($_POST['admin-update'])) {
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$status 	=	$_POST['status'];
			$alamat 	=	$_POST['alamat'];
			$kelamin 	=	$_POST['jenis_kelamin'];

			$admin 		=	mysql_query("UPDATE users 
											SET `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `status` = '$status', `jenis_kelamin` = '$kelamin'
											WHERE id = '$id'");
			if ($admin) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?users=admin' </script>";
			}
		}

		$dataadmin 		= 	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			= 	mysql_fetch_array($dataadmin);
	}
?>

<?php
	//Pembimbing Edit 
	if (isset($_GET['pembimbing-edit'])) {
		$id 	=	$_GET['pembimbing-edit'];

		if (isset($_POST['pembimbing-update'])) {
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$status 	=	$_POST['status'];
			$alamat 	=	$_POST['alamat'];
			$kelamin 	=	$_POST['jenis_kelamin'];

			$pembimbing 		=	mysql_query("UPDATE users 
											SET `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `status` = '$status', `jenis_kelamin` = '$kelamin'
											WHERE id = '$id'");
			if ($pembimbing) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?users=pembimbing' </script>";
			}
		}

		$datapembimbing 	= 	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			= 	mysql_fetch_array($datapembimbing);
	}
?>


<?php
	//Siswa Edit 
	if (isset($_GET['siswa-edit'])) {
		$id 	=	$_GET['siswa-edit'];

		if (isset($_POST['siswa-update'])) {
			$username 	=	$_POST['username'];
			$name 		=	$_POST['name'];
			$telp 		=	$_POST['telp'];
			$status 	=	$_POST['status'];
			$alamat 	=	$_POST['alamat'];
			$kelamin 	=	$_POST['jenis_kelamin'];

			$siswa 		=	mysql_query("UPDATE users 
											SET `name` = '$name', `username` = '$username', `telp` = '$telp', 
												`alamat` = '$alamat', `status` = '$status', `jenis_kelamin` = '$kelamin'
											WHERE id = '$id'");
			if ($siswa) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?users=siswa' </script>";
			}
		}

		$datasiswa 	= 	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			= 	mysql_fetch_array($datasiswa);
	}
?>

<?php 
	//level Edit
	if (isset($_GET['level-edit'])) {
		$id 	=	$_GET['level-edit'];

		if (isset($_POST['level-update'])) {
			$levelnama 	=	$_POST['nm_level'];

			$level 		=	mysql_query("UPDATE level SET `nm_level` = '$levelnama' WHERE level_id = '$id'");
			if ($level) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?akademik=level' </script>";
			}
		}

		$datalevel		= 	mysql_query("SELECT * FROM level WHERE level_id=$id");
		$row 			= 	mysql_fetch_array($datalevel);
	}
?>
<?php 
	//Tahun Ajaran Edit
	if (isset($_GET['tahun-edit'])) {
		$id 	=	$_GET['tahun-edit'];

		if (isset($_POST['tahun-update'])) {
			$tahunnama 	=	$_POST['tahun_nama'];

			$tahun 		=	mysql_query("UPDATE tahun SET `tahun_nama` = '$tahunnama' WHERE tahun_id = '$id'");
			if ($tahun) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?akademik=tahun' </script>";
			}
		}

		$datatahun		= 	mysql_query("SELECT * FROM tahun WHERE tahun_id=$id");
		$row 			= 	mysql_fetch_array($datatahun);
	}
?>
<?php 
	//Mata Pelajaran Edit
	if (isset($_GET['pelajaran-edit'])) {
		$id 	=	$_GET['pelajaran-edit'];

		if (isset($_POST['pelajaran-update'])) {
			$pelajaran_nama 	=	$_POST['pelajaran_nama'];

			$pelajaran 		=	mysql_query("UPDATE pelajaran SET `pelajaran_nama` = '$pelajaran_nama' WHERE pelajaran_id = '$id'");
			if ($pelajaran) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?akademik=pelajaran' </script>";
			}
		}

		$datapelajaran	= 	mysql_query("SELECT * FROM pelajaran WHERE pelajaran_id=$id");
		$row 			= 	mysql_fetch_array($datapelajaran);
	}
?>
<?php 
	//Kategori Edit
	if (isset($_GET['kategori-edit'])) {
		$id 	=	$_GET['kategori-edit'];

		if (isset($_POST['kategori-update'])) {
			$kategorinama 	=	$_POST['nama'];
			$kategorideskripsi 	=	$_POST['deskripsi'];

			$kategori 		=	mysql_query("UPDATE kategori SET `kategori_nama` = '$kategorinama', `kategori_deskripsi` = '$kategorideskripsi' WHERE kategori_id = '$id'");
			if ($kategori) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?artikel=kategori' </script>";
			}
		}

		$datakategori	= 	mysql_query("SELECT * FROM kategori WHERE kategori_id=$id");
		$row 			= 	mysql_fetch_array($datakategori);
	}
?>
<?php 
	//Data Bimbel Edit
	if (isset($_GET['bimbel-edit'])) {
		$id 	=	$_GET['bimbel-edit'];

		if (isset($_POST['bimbel-update'])) {
			$bimbel_nama		=	$_POST['bimbel_nama'];
			$bimbel_alamat		=	$_POST['bimbel_alamat'];
			$bimbel_telp		=	$_POST['bimbel_telp'];
			$bimbel_visi		=	$_POST['bimbel_visi'];
			$bimbel_misi		=	$_POST['bimbel_misi'];

			$bimbel	= 	mysql_query("UPDATE bimbel 
										SET `bimbel_nama` = '$bimbel_nama', `bimbel_alamat` = '$bimbel_alamat', `bimbel_telp` = '$bimbel_telp', `bimbel_visi` = '$bimbel_visi', `bimbel_misi` = '$bimbel_misi' 
										WHERE bimbel_id = '$id'");

			if ($bimbel) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?akademik=bimbel' </script>";
			}
		}

		$databimbel 	=	mysql_query("SELECT * FROM bimbel WHERE bimbel_id=$id");
		$row 			=	mysql_fetch_array($databimbel);
	}
?>
<?php 
	//Nilai Edit
	if (isset($_GET['nilai-edit'])) {
		$id 	=	$_GET['nilai-edit'];

		if (isset($_POST['nilai-update'])) {
			$kkm 		=	$_POST['kkm'];
			$nilaipoin 	=	$_POST['poin'];

			$nilai 		=	mysql_query("UPDATE nilai SET `nilai_kkm` = '$kkm', `nilai_poin` = '$nilaipoin' WHERE nilai_id = '$id'");
			if ($nilai) {
				echo "<meta http-equiv='refresh' content='0;URL=?nilai=tampil'>";
			}
		}

		$datanilai	= 	mysql_query("SELECT * FROM nilai WHERE nilai_id=$id");
		$row 			= 	mysql_fetch_array($datanilai);
	}
?>
<?php 
	//Data Artikel Edit
date_default_timezone_set('Asia/Jakarta');
	if (isset($_GET['artikel-edit'])) {
		$id 	=	$_GET['artikel-edit'];

		if (isset($_POST['update-artikel'])) {
			$judul		 =	$_POST['judul'];
			$isi		 =	$_POST['isi'];
			$kategori	 =	$_POST['kategori'];
			$artikel_tgl =	date('Y-m-d H:i:s');

			$artikel 	 = 	mysql_query("UPDATE artikel
										SET `artikel_judul` = '$judul', `artikel_isi` = '$isi', `artikel_tgl` = '$artikel_tgl', `kategori_id` = '$kategori' 
										WHERE artikel_id = '$id'");

			if ($artikel) {
				echo "<script> alert('Data Berhasil Diubah'); location.href='?artikel=list' </script>";
			}
		}

		$dataartikel 	=	mysql_query("SELECT * FROM artikel WHERE artikel_id=$id");
		$row 			=	mysql_fetch_array($dataartikel);
	}
?>
<?php 
	// Profile
	if (isset($_GET['profile'])) {
		$id 	=	$_GET['profile'];

		$dataprofile 	=	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			=	mysql_fetch_array($dataprofile);
	}
?>
<?php 
	// Profile
	if (isset($_GET['change'])) {
		$id 	=	$_GET['change'];

		if (isset($_POST['change'])) {
			$new		=	$_POST['new'];

			$password 	= 	mysql_query("UPDATE users 
										SET `password` = '$new'
										WHERE id = '$id'");

			if ($password) {
				echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			}
		}

		$datapassword 	=	mysql_query("SELECT * FROM users WHERE id=$id");
		$row 			=	mysql_fetch_array($datapassword);
	}
?>