<?php 
	//Admin Delete
	if (isset($_GET['admin-del'])) {
		$id 	=	$_GET['admin-del'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?users=admin' </script>";
		}
	}
?>
<?php 
	//Pembimbing Delete
	if (isset($_GET['pembimbing-del'])) {
		$id 	=	$_GET['pembimbing-del'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?users=pembimbing' </script>";
		}
	}
?>
<?php 
	//Siswa Delete
	if (isset($_GET['siswa-del'])) {
		$id 	=	$_GET['siswa-del'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?users=siswa' </script>";
		}
	}
?>
<?php 
	//level Delete
	if (isset($_GET['level-del'])) {
		$id 	=	$_GET['level-del'];

		$delete 	=	mysql_query("DELETE FROM level WHERE level_id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?akademik=level' </script>";
		}
	}
?>
<?php 
	//Tahun Ajaran Delete
	if (isset($_GET['tahun-del'])) {
		$id 	=	$_GET['tahun-del'];

		$delete 	=	mysql_query("DELETE FROM tahun WHERE tahun_id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?akademik=tahun' </script>";
		}
	}
?>
<?php 
	//Mata Pelajaran Delete
	if (isset($_GET['pelajaran-del'])) {
		$id 	=	$_GET['pelajaran-del'];

		$delete 	=	mysql_query("DELETE FROM pelajaran WHERE pelajaran_id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?akademik=pelajaran' </script>";
		}
	}
?>
<?php 
	//Data Bimbel Delete
	if (isset($_GET['bimbel-del'])) {
		$id 	=	$_GET['bimbel-del'];

		$delete 	=	mysql_query("DELETE FROM bimbel WHERE bimbel_id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?akademik=bimbel' </script>";
		}
	}
?>
<?php 
	//Modul Delete
	if (isset($_GET['modul-del'])) {
		$id 	=	$_GET['modul-del'];

		$delete 	=	mysql_query("DELETE FROM download WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
		}
	}
?>
<?php 
	//Kategori Delete
	if (isset($_GET['kategori-del'])) {
		$id 	=	$_GET['kategori-del'];

		$delete 	=	mysql_query("DELETE FROM kategori WHERE kategori_id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?artikel=kategori' </script>";
		}
	}
?>
<?php 
	//Artikel Delete
	if (isset($_GET['artikel-del'])) {
		$id 	=	$_GET['artikel-del'];

		$delete 	=	mysql_query("DELETE FROM artikel WHERE artikel_id = $id");
		if ($delete) {
			echo "<script> alert('Data Berhasil Dihapus'); location.href='?artikel=list' </script>";
		}
	}
?>
<?php 
	//Nilai Delete
	if (isset($_GET['nilai-del'])) {
		$id 	=	$_GET['nilai-del'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=tampil '/>";
		}
	}
?>