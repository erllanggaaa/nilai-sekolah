<?php 
	//Admin Create
	if (isset($_POST['create-admin'])) {
		$username 		=	$_POST['username'];
		$password 		=	$_POST['password'];
		$name 			=	$_POST['name'];
		$telp 			=	$_POST['telp'];
		$status 		=	$_POST['status'];
		$alamat 		=	$_POST['alamat'];
		$jenis_kelamin 	=	$_POST['jenis_kelamin'];
		$access 		=	$_POST['access'];

		$admin 		= 	mysql_query("INSERT INTO users (`id`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `access`) 
									VALUES ('', '$name', '$username', '$password', '$telp', '$alamat', '$status', '$jenis_kelamin', '$access')");

		if ($admin) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?users=admin' </script>";
		}
	}
?>
<?php 
	//Pembimbing Create
	if (isset($_POST['create-pembimbing'])) {
		$username 		=	$_POST['username'];
		$password 		=	$_POST['password'];
		$name 			=	$_POST['name'];
		$telp 			=	$_POST['telp'];
		$status 		=	$_POST['status'];
		$alamat 		=	$_POST['alamat'];
		$jenis_kelamin 	=	$_POST['jenis_kelamin'];
		$access 		=	$_POST['access'];

		$pembimbing 	= 	mysql_query("INSERT INTO users (`id`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `access`) 
									VALUES ('', '$name', '$username', '$password', '$telp', '$alamat', '$status', '$jenis_kelamin', '$access')");

		if ($pembimbing) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?users=pembimbing' </script>";
		}
	}
?>

<?php 
	//Siswa Create
	if (isset($_POST['create-siswa'])) {
		$username 		=	$_POST['username'];
		$password 		=	$_POST['password'];
		$name 			=	$_POST['name'];
		$telp 			=	$_POST['telp'];
		$status 		=	$_POST['status'];
		$alamat 		=	$_POST['alamat'];
		$jenis_kelamin 	=	$_POST['jenis_kelamin'];
		$access 		=	$_POST['access'];

		$siswa 		= 	mysql_query("INSERT INTO users (`id`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `access`) 
									VALUES ('', '$name', '$username', '$password', '$telp', '$alamat', '$status', '$jenis_kelamin', '$access')");

		if ($siswa) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?users=siswa' </script>";
		}
	}
?>
<?php 
	//level Create
	if (isset($_POST['create-level'])) {
		$nm_level	=	$_POST['level'];
		$level 		= 	mysql_query("INSERT INTO level (`level_id`, `nm_level`) 
									VALUES ('', '$nm_level')");

		if ($level) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?akademik=level' </script>";
		}
	}
?>
<?php 
	//Tahun Create
	if (isset($_POST['create-tahun'])) {
		$tahun_nama	=	$_POST['tahun_nama'];
		$tahun 		= 	mysql_query("INSERT INTO tahun (`tahun_id`, `tahun_nama`) 
									VALUES ('', '$tahun_nama')");

		if ($tahun) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?akademik=tahun' </script>";
		}
	}
?>
<?php 
	//Mata Pelajaran Create
	if (isset($_POST['create-pelajaran'])) {
		$pelajaran_nama	=	$_POST['pelajaran_nama'];

		$pelajaran 		= 	mysql_query("INSERT INTO pelajaran (`pelajaran_id`, `pelajaran_nama`) 
									VALUES ('', '$pelajaran_nama')");

		if ($pelajaran) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?akademik=pelajaran' </script>";
		}
	}
?>
<?php 
	//Kategori Create
	if (isset($_POST['create-kategori'])) {
		$kategorinama		=	$_POST['nama'];
		$kategorideskripsi	=	$_POST['deskripsi'];

		$kategori 			= 	mysql_query("INSERT INTO kategori (`kategori_id`, `kategori_nama`, `kategori_deskripsi`) 
									VALUES (NULL, '$kategorinama', '$kategorideskripsi')");

		if ($kategori) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?artikel=kategori' </script>";
		}
	}
?>
<?php 
	//Bimbel Create
	if (isset($_POST['create-bimbel'])) {
		$bimbel_nama		=	$_POST['bimbel_nama'];
		$bimbel_alamat		=	$_POST['bimbel_alamat'];
		$bimbel_telp		=	$_POST['bimbel_telp'];
		$bimbel_visi		=	$_POST['bimbel_visi'];
		$bimbel_misi		=	$_POST['bimbel_misi'];
		$id					=	$_POST['id'];

		$bimbel 			= 	mysql_query("INSERT INTO bimbel (`bimbel_id`, `bimbel_nama`, `bimbel_alamat`, `bimbel_telp`, `bimbel_visi`, `bimbel_misi`, `id`) 
									VALUES ('', '$bimbel_nama', '$bimbel_alamat', '$bimbel_telp', '$bimbel_visi', '$bimbel_misi', '".$_SESSION["id"]."')");

		if ($bimbel) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?akademik=bimbel' </script>";
		}
	}
?>
<?php
//Siswa Create
	if (isset($_POST['input-nilai'])) {
		$id 			=	$_POST['id'];
		$pelajaran_id 	=	$_POST['pelajaran_id'];
		$level_id 		=	$_POST['level_id'];
		$tahun_id 		=	$_POST['tahun_id'];
		$nilai_poin 	=	$_POST['nilai_poin'];

		
		$nilai 		= 	mysql_query("INSERT INTO nilai (`nilai_id`,`id`,`pelajaran_id`, `level_id`, `tahun_id`, `nilai_poin`) 
									VALUES ('', '$id', '$pelajaran_id', '$level_id', '$tahun_id', '$nilai_poin')");

		if ($nilai) {
				echo "<script> alert('Data Berhasil Diinput'); location.href='?nilai=input' </script>";
			}else{
				echo "Gagal Input Nilai";
			}
	}
?>
<?php 
	//Upload Modul
	if(isset($_POST['upload'])){
        $allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name      = $_FILES['file']['name'];
        $file_ext       = strtolower(end(explode('.', $file_name)));
        $file_size      = $_FILES['file']['size'];
        $file_tmp       = $_FILES['file']['tmp_name'];
        
        $nama           = $_POST['nama'];
        $tgl            = date("Y-m-d");
        
        if(in_array($file_ext, $allowed_ext) === true){
            if($file_size < 20440700){
                $lokasi = 'files/'.$nama.'.'.$file_ext;
                move_uploaded_file($file_tmp, $lokasi);
                $in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
                if($in){
                    echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
                }else{
                    echo '<div class="error">ERROR: Gagal upload file!</div>';
                }
            }else{
                echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 20 Mb!</div>';
            }
        }else{
            echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
        }
    }
?>
<?php 
	//Artikel Create
date_default_timezone_set('Asia/Jakarta');
	if (isset($_POST['create-artikel'])) {
		$judul 		 =	$_POST['judul'];
		$isi		 =	$_POST['isi'];
		$kategori 	 =	$_POST['kategori'];
		$artikel_tgl =	date('Y-m-d H:i:s');
		$id 		 =	$_POST['id'];

		$artikel 	 =	mysql_query("INSERT INTO artikel (`artikel_id`, `artikel_judul`, `artikel_isi`, `artikel_tgl`, `kategori_id`, `id`) 
									VALUES (NULL, '$judul', '$isi', '$artikel_tgl', '$kategori', '".$_SESSION["id"]."')");

		if ($artikel) {
			echo "<script> alert('Data Berhasil Disimpan'); location.href='?artikel=list' </script>";
		}
	}
?>