<?php
// Rizky Arlin
//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nomor_keluarga = $_POST["nomor_keluarga"];	
	$nama_kepala_keluarga = $_POST["nama_kepala_keluarga"];
	$umur = $_POST["umur"];
	$pendidikan = $_POST["pendidikan"];
	$jenis_kelamin = $_POST["jenis_kelamin"];
	$kabupaten = $_POST["kabupaten"];
	$kecamatan = $_POST["kecamatan"];
	$desa = $_POST["desa"];
	$dusun = $_POST["dusun"];
	$rt = $_POST["rt"];
	$rw = $_POST["rw"];
	$jalan = $_POST["jalan"];
	$agama = $_POST["agama"];
	$pelatihan_keterampilan = $_POST["pelatihan_keterampilan"];
	$jumlah_anggota_keluarga = $_POST["jumlah_anggota_keluarga"];
	$biaya_sembako = $_POST["biaya_sembako"];
	$biaya_pendidikan = $_POST["biaya_pendidikan"];
	$biaya_kesehatan = $_POST["biaya_kesehatan"];
	$biaya_listrik = $_POST["biaya_listrik"];
	$biaya_air_bersih = $_POST["biaya_air_bersih"];
	$biaya_pakaian = $_POST["biaya_pakaian"];
	$biaya_lainnya = $_POST["biaya_lainnya"];
	$status_tanah_rumah = $_POST["status_tanah_rumah"];	
	$jenis_bangunan = $_POST["jenis_bangunan"];
	$minim_perabot = $_POST["minim_perabot"];
	$lampu_tempel = $_POST["lampu_tempel"];
	$layak = $_POST["layak"];
	$mampu_menyekolahkan = $_POST["mampu_menyekolahkan"];
	$sumber_air = $_POST["sumber_air"];
	$waktu_air = $_POST["waktu_air"];
	$tempat_air = $_POST["penggunaan_air"];
	$penggunaan_air = $_POST["kabupaten"];

	
	$servername = "localhost";
	$username = "root";
	$password = "kamig";
	$db = "u626322678_jnpt";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 	
	$query = "INSERT INTO 
	keluarga(kabupaten, 
			kecamatan, 
			desa, 
			dusun, 
			rt, 
			rw, 
			jalan, 
			nama_kepala_keluarga, 
			umur, 
			jenis_kelamin, 
			pendidikan, 
			agama, 
			pelatihan_keterampilan, 
			jumlah_anggota_keluarga, 
			biaya_sembako, 
			biaya_pendidikan, 
			biaya_kesehatan, 
			biaya_listrik, 
			biaya_air_bersih, 
			biaya_pakaian, 
			biaya_lainnya, 
			status_tanah_rumah, 
			jenis_bangunan, minim_perabot, 
			lampu_tempel, 
			layak, 
			mampu_menyekolahkan, 
			sumber_air, 
			waktu_air, 
			tempat_air, 
			penggunaan_air)

		VALUES (
		'$kabupaten', 
		'$kecamatan', 
		'$desa', 
		'$dusun', 
		'$rt', 
		'$rw', 
		'$jalan', 
		'$nama_kepala_keluarga', 
		'$umur', 
		'$jenis_kelamin', 
		'$pendidikan', 
		'$agama', 
		'$pelatihan_keterampilan', 
		'$jumlah_anggota_keluarga', 
		'$biaya_sembako', 
		'$biaya_pendidikan', 
		'$biaya_kesehatan', 
		'$biaya_listrik', 
		'$biaya_air_bersih', 
		'$biaya_pakaian', 
		'$biaya_lainnya', 
		'$status_tanah_rumah', 
		'$jenis_bangunan', 
		'$minim_perabot', 
		'$lampu_tempel', 
		'$layak', 
		'$mampu_menyekolahkan', 
		'$sumber_air', 
		$waktu_air', 
		'$tempat_air', 
		'$penggunaan_air')";
	$conn->query($query) or die ($conn->error);

	//tabel laut
	for ($i=1; $i <= $_POST["jumlah_biota"]; $i++) { 
		$jenis_biota = $_POST["jenis_biota"+$i];
		$query = "INSERT INTO laut(nomor_keluarga, jenis_biota) VALUES('$nomor_keluarga', '$jenis_biota')";
		$conn->query($query) or die ($conn->error);
	}

	//tabel pohon
	for ($i=1; $i <= $_POST["jumlah_pohon"]; $i++) { 
		$jenis_pohon = $_POST["jenis_pohon" + $i];
		$bentuk_olahan = $_POST["bentuk_olahan" + $i];
		$query = "INSERT INTO pohon(nomor_keluarga, jenis_pohon, bentuk_olahan) VALUES('$nomor_keluarga', '$jenis_pohon', '$bentuk_olahan')";
		$conn->query($query) or die ($conn->error);
	}

	//tabel tanaman
	for ($i=1; $i <= $_POST["jumlah_tanaman"]; $i++) { 
		$jenis_tanaman = $_POST["jenis_tanaman"+$i];
		$query = "INSERT INTO tanaman(nomor_keluarga, jenis_tanaman) VALUES('$nomor_keluarga', '$jenis_tanaman')";
		$conn->query($query) or die ($conn->error);
	}

	//tabel anggota
	for ($i=1; $i <= $_POST["jumlah_anggota_keluarga"]; $i++) { 
		$nama = $_POST["nama"+$i];
		$hubungan = $_POST["hubungan"+$i];
		$tempat_lahir = $_POST["tempat_lahir"+$i];
		$tanggal_lahir = $_POST["tanggal_lahir"+$i];
		$pekerjaan_utama = $_POST["pekerjaan_utama"+$i];
		$pekerjaan_sampingan = $_POST["pekerjaan_sampingan"+$i];
		$penghasilan_utama = $_POST["penghasilan_utama"+$i];
		$penghasilan_sampingan = $_POST["penghasilan_sampingan"+$i];
		$jenis_pekerjaan = $_POST["jenis_pekerjaan"+$i];
		$jenis_pertanian = $_POST["jenis_pertanian"+$i];
		$luas_lahan_pertanian = $_POST["luas_lahan_pertanian"+$i];
		$status_kepemilikan_lahan_pertanian = $_POST["status_kepemilikan_lahan_pertanian"+$i];
		$penghasilan_per_panen_pertanian = $_POST["penghasilan_per_panen_pertanian"+$i];		
		$frekuensi_panen_pertanian = $_POST["frekuensi_panen_pertanian"+$i];
		$jenis_ternak = $_POST["jenis_ternak"+$i];
		$jumlah_ternak = $_POST["jumlah_ternak"+$i];
		$penjualan_per_bulan_ternak = $_POST["penjualan_per_bulan_ternak"+$i];
		$hasil_penjualan_per_bulan_ternak = $_POST["hasil_penjualan_per_bulan_ternak"+$i];
		$status_kepemilikan_ternak = $_POST["status_kepemilikan_ternak"+$i];
		$status_kepemilikan_lahan_ternak = $_POST["status_kepemilikan_lahan_ternak"+$i];
		$jenis_perikanan = $_POST["jenis_perikanan"+$i];
		$luas_lahan_perikanan = $_POST["luas_lahan_perikanan"+$i];
		$status_kepemilikan_lahan_perikanan = $_POST["status_kepemilikan_lahan_perikanan"+$i];
		$penghasilan_per_panen_perikanan = $_POST["penghasilan_per_panen_perikanan"+$i];
		$frekuensi_panen_perikanan = $_POST["frekuensi_panen_perikanan"+$i];

		$query = "INSERT INTO 
			anggota(nomor_keluarga, 
			nama, 
			hubungan, 
			tempat_lahir, 
			tanggal_lahir, 
			pekerjaan_utama, 
			pekerjaan_sampingan, 
			penghasilan_utama, 
			penghasilan_sampingan, 
			jenis_pekerjaan, 
			jenis_pertanian, 
			luas_lahan_pertanian, 
			status_kepemilikan_lahan_pertanian, 
			penghasilan_per_panen_pertanian, 
			frekuensi_panen_pertanian, 
			jenis_ternak, 
			jumlah_ternak, 
			penjualan_per_bulan_ternak, 
			hasil_penjualan_per_bulan_ternak, 
			status_kepemilikan_ternak, 
			status_kepemilikan_lahan_ternak, 
			jenis_perikanan, 
			luas_lahan_perikanan, 
			status_kepemilikan_lahan_perikanan, 
			penghasilan_per_panen_perikanan, 
			frekuensi_panen_perikanan) 

			VALUES('$nomor_keluarga', 
			'$nama', 
			'$hubungan', 
			'$tempat_lahir', 
			'$tanggal_lahir', 
			'$pekerjaan_utama', 
			'$pekerjaan_sampingan', 
			'$penghasilan_utama', 
			'$penghasilan_sampingan', 
			'$jenis_pekerjaan', 
			'$jenis_pertanian', 
			'$luas_lahan_pertanian', 
			'$status_kepemilikan_lahan_pertanian', 
			'$penghasilan_per_panen_pertanian', 
			'$frekuensi_panen_pertanian', 
			'$jenis_ternak', 
			jumlah_ternak, 
			'$penjualan_per_bulan_ternak', 
			'$hasil_penjualan_per_bulan_ternak', 
			'$status_kepemilikan_ternak', 
			'$status_kepemilikan_lahan_ternak', 
			'$jenis_perikanan', 
			'$luas_lahan_perikanan', 
			'$status_kepemilikan_lahan_perikanan', 
			'$penghasilan_per_panen_perikanan', 
			'$frekuensi_panen_perikanan'
			)";
		$conn->query($query) or die ($conn->error);
	}

	$conn->close();	
}
?>


<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nomor_keluarga = $_POST["nomor_keluarga"];	
	$nama_kepala_keluarga = $_POST["nama_kepala_keluarga"];
	$umur = $_POST["umur"];
	$pendidikan = $_POST["pendidikan"];
	$jenis_kelamin = $_POST["jenis_kelamin"];
	$kabupaten = $_POST["kabupaten"];
	$kecamatan = $_POST["kecamatan"];
	$desa = $_POST["desa"];
	$dusun = $_POST["dusun"];
	$rt = $_POST["rt"];
	$rw = $_POST["rw"];
	$jalan = $_POST["jalan"];
	$agama = $_POST["agama"];
	$pelatihan_keterampilan = $_POST["pelatihan_keterampilan"];
	$jumlah_anggota_keluarga = $_POST["jumlah_anggota_keluarga"];
	$biaya_sembako = $_POST["biaya_sembako"];
	$biaya_pendidikan = $_POST["biaya_pendidikan"];
	$biaya_kesehatan = $_POST["biaya_kesehatan"];
	$biaya_listrik = $_POST["biaya_listrik"];
	$biaya_air_bersih = $_POST["biaya_air_bersih"];
	$biaya_pakaian = $_POST["biaya_pakaian"];
	$biaya_lainnya = $_POST["biaya_lainnya"];
	$status_tanah_rumah = $_POST["status_tanah_rumah"];	
	$jenis_bangunan = $_POST["jenis_bangunan"];
	$minim_perabot = $_POST["minim_perabot"];
	$lampu_tempel = $_POST["lampu_tempel"];
	$layak = $_POST["layak"];
	$mampu_menyekolahkan = $_POST["mampu_menyekolahkan"];
	$sumber_air = $_POST["sumber_air"];
	$waktu_air = $_POST["waktu_air"];
	$tempat_air = $_POST["penggunaan_air"];
	$penggunaan_air = $_POST["kabupaten"];

	
	$servername = "localhost";
	$username = "root";
	$password = "kamig";
	$db = "u626322678_jnpt";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 	
	$query = "INSERT INTO 
	keluarga(kabupaten, 
			kecamatan, 
			desa, 
			dusun, 
			rt, 
			rw, 
			jalan, 
			nama_kepala_keluarga, 
			umur, 
			jenis_kelamin, 
			pendidikan, 
			agama, 
			pelatihan_keterampilan, 
			jumlah_anggota_keluarga, 
			biaya_sembako, 
			biaya_pendidikan, 
			biaya_kesehatan, 
			biaya_listrik, 
			biaya_air_bersih, 
			biaya_pakaian, 
			biaya_lainnya, 
			status_tanah_rumah, 
			jenis_bangunan, minim_perabot, 
			lampu_tempel, 
			layak, 
			mampu_menyekolahkan, 
			sumber_air, 
			waktu_air, 
			tempat_air, 
			penggunaan_air)

		VALUES (
		'$kabupaten', 
		'$kecamatan', 
		'$desa', 
		'$dusun', 
		'$rt', 
		'$rw', 
		'$jalan', 
		'$nama_kepala_keluarga', 
		'$umur', 
		'$jenis_kelamin', 
		'$pendidikan', 
		'$agama', 
		'$pelatihan_keterampilan', 
		'$jumlah_anggota_keluarga', 
		'$biaya_sembako', 
		'$biaya_pendidikan', 
		'$biaya_kesehatan', 
		'$biaya_listrik', 
		'$biaya_air_bersih', 
		'$biaya_pakaian', 
		'$biaya_lainnya', 
		'$status_tanah_rumah', 
		'$jenis_bangunan', 
		'$minim_perabot', 
		'$lampu_tempel', 
		'$layak', 
		'$mampu_menyekolahkan', 
		'$sumber_air', 
		$waktu_air', 
		'$tempat_air', 
		'$penggunaan_air')";
	$conn->query($query) or die ($conn->error);

	//tabel laut
	for ($i=1; $i <= $_POST["jumlah_biota"]; $i++) { 
		$jenis_biota = $_POST["jenis_biota"+$i];
		$query = "INSERT INTO laut(nomor_keluarga, jenis_biota) VALUES('$nomor_keluarga', '$jenis_biota')";
		$conn->query($query) or die ($conn->error);
	}

	//tabel pohon
	for ($i=1; $i <= $_POST["jumlah_pohon"]; $i++) { 
		$jenis_pohon = $_POST["jenis_pohon" + $i];
		$bentuk_olahan = $_POST["bentuk_olahan" + $i];
		$query = "INSERT INTO pohon(nomor_keluarga, jenis_pohon, bentuk_olahan) VALUES('$nomor_keluarga', '$jenis_pohon', '$bentuk_olahan')";
		$conn->query($query) or die ($conn->error);
	}

	//tabel tanaman
	for ($i=1; $i <= $_POST["jumlah_tanaman"]; $i++) { 
		$jenis_tanaman = $_POST["jenis_tanaman"+$i];
		$query = "INSERT INTO tanaman(nomor_keluarga, jenis_tanaman) VALUES('$nomor_keluarga', '$jenis_tanaman')";
		$conn->query($query) or die ($conn->error);
	}

	//tabel anggota
	for ($i=1; $i <= $_POST["jumlah_anggota_keluarga"]; $i++) { 
		$nama = $_POST["nama"+$i];
		$hubungan = $_POST["hubungan"+$i];
		$tempat_lahir = $_POST["tempat_lahir"+$i];
		$tanggal_lahir = $_POST["tanggal_lahir"+$i];
		$pekerjaan_utama = $_POST["pekerjaan_utama"+$i];
		$pekerjaan_sampingan = $_POST["pekerjaan_sampingan"+$i];
		$penghasilan_utama = $_POST["penghasilan_utama"+$i];
		$penghasilan_sampingan = $_POST["penghasilan_sampingan"+$i];
		$jenis_pekerjaan = $_POST["jenis_pekerjaan"+$i];
		$jenis_pertanian = $_POST["jenis_pertanian"+$i];
		$luas_lahan_pertanian = $_POST["luas_lahan_pertanian"+$i];
		$status_kepemilikan_lahan_pertanian = $_POST["status_kepemilikan_lahan_pertanian"+$i];
		$penghasilan_per_panen_pertanian = $_POST["penghasilan_per_panen_pertanian"+$i];		
		$frekuensi_panen_pertanian = $_POST["frekuensi_panen_pertanian"+$i];
		$jenis_ternak = $_POST["jenis_ternak"+$i];
		$jumlah_ternak = $_POST["jumlah_ternak"+$i];
		$penjualan_per_bulan_ternak = $_POST["penjualan_per_bulan_ternak"+$i];
		$hasil_penjualan_per_bulan_ternak = $_POST["hasil_penjualan_per_bulan_ternak"+$i];
		$status_kepemilikan_ternak = $_POST["status_kepemilikan_ternak"+$i];
		$status_kepemilikan_lahan_ternak = $_POST["status_kepemilikan_lahan_ternak"+$i];
		$jenis_perikanan = $_POST["jenis_perikanan"+$i];
		$luas_lahan_perikanan = $_POST["luas_lahan_perikanan"+$i];
		$status_kepemilikan_lahan_perikanan = $_POST["status_kepemilikan_lahan_perikanan"+$i];
		$penghasilan_per_panen_perikanan = $_POST["penghasilan_per_panen_perikanan"+$i];
		$frekuensi_panen_perikanan = $_POST["frekuensi_panen_perikanan"+$i];

		$query = "INSERT INTO 
			anggota(nomor_keluarga, 
			nama, 
			hubungan, 
			tempat_lahir, 
			tanggal_lahir, 
			pekerjaan_utama, 
			pekerjaan_sampingan, 
			penghasilan_utama, 
			penghasilan_sampingan, 
			jenis_pekerjaan, 
			jenis_pertanian, 
			luas_lahan_pertanian, 
			status_kepemilikan_lahan_pertanian, 
			penghasilan_per_panen_pertanian, 
			frekuensi_panen_pertanian, 
			jenis_ternak, 
			jumlah_ternak, 
			penjualan_per_bulan_ternak, 
			hasil_penjualan_per_bulan_ternak, 
			status_kepemilikan_ternak, 
			status_kepemilikan_lahan_ternak, 
			jenis_perikanan, 
			luas_lahan_perikanan, 
			status_kepemilikan_lahan_perikanan, 
			penghasilan_per_panen_perikanan, 
			frekuensi_panen_perikanan) 

			VALUES('$nomor_keluarga', 
			'$nama', 
			'$hubungan', 
			'$tempat_lahir', 
			'$tanggal_lahir', 
			'$pekerjaan_utama', 
			'$pekerjaan_sampingan', 
			'$penghasilan_utama', 
			'$penghasilan_sampingan', 
			'$jenis_pekerjaan', 
			'$jenis_pertanian', 
			'$luas_lahan_pertanian', 
			'$status_kepemilikan_lahan_pertanian', 
			'$penghasilan_per_panen_pertanian', 
			'$frekuensi_panen_pertanian', 
			'$jenis_ternak', 
			jumlah_ternak, 
			'$penjualan_per_bulan_ternak', 
			'$hasil_penjualan_per_bulan_ternak', 
			'$status_kepemilikan_ternak', 
			'$status_kepemilikan_lahan_ternak', 
			'$jenis_perikanan', 
			'$luas_lahan_perikanan', 
			'$status_kepemilikan_lahan_perikanan', 
			'$penghasilan_per_panen_perikanan', 
			'$frekuensi_panen_perikanan'
			)";
		$conn->query($query) or die ($conn->error);
	}

	$conn->close();	
}
?>


<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>


<form onsubmit="input.php">	
	<div id="tabel_anggota" style="background-color: red;">
	
		<label>Nomor Anggota</label>:<input type="text" name="nomor_anggota" placeholder="Masukkan Nomor Anggota"></input><br>
		<label>Nomor Keluarga</label>:<input type="text" name="nomor_keluarga" placeholder="Masukkan Nomor Keluarga"></input><br>
		<label>Nama</label>:<input type="text" name="nama" placeholder="Masukkan Nama"></input><br>
		<label>Hubungan</label>:<select id="hubungan name="hubungan" ">
			<option value="">-Masukkan Hubungan-</option>
			<option value="Kakek">Kakek</option>
			<option value="Bapak">Bapak</option>
			<option value="Ibu">Ibu</option>
			<option value="Anak">Anak</option>
			<option value="Saudara">Saudara</option>
		</select><br>
		<label>Tempat Lahir</label>:<input  type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir"></input><br>
		<label>Tanggal Lahir</label>:<input type="date" name="tanggal_lahir"></input><br>
		<label>Pekerjaan Utama</label>:<input type="text" name="pekerjaan_utama" placeholder="Masukkan Pekerjaan Utama"></input><br>
		<label>Pekerjaan Sampingan</label>:<input type="text" name="pekerjaan_sampingan" placeholder="Masukkan Pekerjaan Sampingan"></input><br>
		<label>Penghasilan Utama</label>:<input type="text" name="penghasilan_utama" placeholder="Masukkan Penghasilan Utama"></input><br>
		<label>Penghasilan Sampingan</label>:<input type="text" name="penghasilan_sampingan" placeholder="Masukkan Penghasilan Sampingan"></input><br>
		<label>Jenis Pekerjaan</label>:<select id="jenis_pekerjaan" name="jenis_pekerjaan">
			<option>-Jenis Pekerjaan-</option>
			<option value="Pertanian">Pertanian</option>
			<option value="Perikanan">Perikanan</option>
			<option value="Peternakan">Peternakan</option>
		</select><br>
		<label>Jenis Pertanian</label>:<input type="text" name="jenis_pertanian" placeholder="Masukkan Jenis Pertanian"></input><br>
		<label>Luas Lahan Pertanian</label>:<input type="text" name="luas_lahan_pertanian" placeholder="Masukkan Luas Lahan"></input><br>
		<label>Status Kepemilikan Lahan Pertanian</label>:<select id="status_kepemilikan_lahan_pertanian" name="status_kepemilikan_lahan_pertanian">
			<option>-Status Kepemilikan Lahan-</option>
			<option value="Milik">Milik</option>
			<option value="Sewa">Sewa</option>
			<option value="Pinjam">Pinjam</option>
			<option value="">Lainnya</option>
		</select><br>
		<label>Penghasilan per Panen Pertanian</label>:<input type="name" name="penghasilan_per_panen_pertanian" placeholder="Masukkan Penghasilan per Panen"></input><br>
		<label>Frekuensi Panen Pertanian</label>:<input type="text" name="frekuensi_panen_pertanian" placeholder="Masukkan Frequensi Pertanian"></input><br>
		<label>Jenis Ternak</label>:<select id="jenis_ternak" name="jenis_ternak">
			<option>-Jenis Ternak-</option>
			<option value="Ayam">Ayam</option>
			<option value="Sapi">Sapi</option>
			<option value="Kerbau">Kerbau</option>
			<option value="Kambing">Kambing</option>
			<option value="">Lainnya</option>
		</select><br>
		<label>Jumlah Ternak</label>:<input type="text" name="jumlah_ternak" placeholder="Masukkan Jumlah Ternak"></input><br>
		<label>Penjualan per Bulan Ternak</label>:<input type="text" name="penjualan_per_bulan_ternak" placeholder="Masukkan Penjualan per Bulan"></input><br>
		<label>Hasil Penjualan per Bulan Ternak</label>:<input type="text" name="hasil_penjualan_per_bulan_ternak" placeholder="Masukkan Hasil Penjualan"></input><br>
		<label>Status Kepemilikan Ternak</label>:<select id="status_kepimilikan_ternak" name="status_kepimilikan_ternak">
			<option>-Kepimilikan Ternak-</option>
			<option value="Milik">Milik</option>
			<option value="Sewa">Sewa</option>
			<option value="Pinjam">Pinjam</option>
			<option value="">Lainnya</option>
		</select><br>
		<label>Status Kepemilikan Lahan Ternak</label>:<select id="status_kepimilikan_lahan_ternak" name="status_kepimilikan_lahan_ternak">
			<option>-Kepimilikan Ternak-</option>
			<option value="Milik">Milik</option>
			<option value="Sewa">Sewa</option>
			<option value="Pinjam">Pinjam</option>
			<option value="">Lainnya</option>
		</select><br>
		<label>Jenis Perikanan</label>:<input type="text" name="jenis_perikanan" placeholder="Masukkan Jenis Perikanan"></input><br>
		<label>Luas Lahan Perikanan</label>:<input type="text" name="luas_lahan_perikanan" placeholder="Masukkan Lahan Perikanan"></input><br>	
		<label>Status Kepemilikan Lahan Perikanan</label>:<select id="status_kepimilikan_lahan_perikanan" name="status_kepimilikan_lahan_perikanan">
			<option>-Kepimilikan Perikanan-</option>
			<option value="Milik">Milik</option>
			<option value="Sewa">Sewa</option>
			<option value="Pinjam">Pinjam</option>
			<option value="">Lainnya</option>
		</select><br>
		<label>Penghasilan per Panen Perikanan</label>:<input type="text" name="penghasilan_per_panen_perikanan" placeholder="Masukkan Penghasilan Panen Perikanan"></input><br>
		<label>Frekuensi Panen Perikanan</label>:<input type="text" name="frekuensi_panen_perikanan" placeholder="Masukkan Frekuensi Perikanan"></input>
</div>	
<br><br>
<div id="tabel_keluarga" style="background-color: green;">
	
	<label>Nomor Keluarga</label>:<input type="text" name="nomor_keluarga" placeholder="Masukkan Nomor Keluarga"></input><br>
	<label>Kabupaten</label>:<input type="text" name="kabupaten" placeholder="Masukkan Kabupaten"></input><br>
	<label>Kecamaatan</label>:<input type="text" name="kecamatan" placeholder="Masukkan Kecamatan"></input><br>
	<label>Desa</label>:<input type="text" name="desa" placeholder="Masukkan Desa"></input><br>
	<label>Dusun</label>:<input type="text" name="dusun" placeholder="Masukkan Dusun"></input><br>
	<label>RT</label>:<input type="text" name="rt" placeholder="Masukkan RT"></input><br>
	<label>RW</label>:<input type="text" name="rw" placeholder="Masukkan RW"></input><br>
	<label>Jalan</label>:<input type="text" name="jalan" placeholder="Masukkan Jalan"></input><br>
	<label>Nama Kepala Keluarga</label>:<input type="text" name="nama_kepala_keluarga" placeholder="Masukkan Nama Kepala Keluarga"></input><br>
	<label>Umur</label>:<input type="text" name="umur" placeholder="Masukkan Umur"></input><br>
	<label>Jenis Kelamin</label>:<select id="jenis_kelamin" name="jenis_kelamin">
		<option>-Jenis Kelamin-</option>
		<option value="laki-laki">Laki-Laki</option>
		<option value="perempuan">Perempuan</option>
	</select><br>
	<label>Pendidikan</label>:<input type="text" name="pendidikan" placeholder="Masukkan Pendidikan"></input><br>
	<label>Agama</label>:<select id="agama" name="agama">
		<option>-Agama-</option>
		<option value="islam">Islam</option>
		<option value="katolik">Katolik</option>
		<option value="kristen">Kristen</option>
		<option value="buddha">Buddha</option>
		<option value="hindu">Hindu</option>
	</select><br>
	<label>Pelatihan Keterampilan</label>:<select id="pelatihan_keterampilan" name="pelatihan_keterampilan">
		<option>-Pelatihan Keterampilan</option>
		<option value="menjahit">Menjahit</option>
		<option value="kerajinan">Kerajinan</option>
		<option value="sablon">Sablon</option>
		<option value="bengkel">Bengkel</option>
	</select><br>
	<label>Jumlah Anggota Keluarga</label>:<input type="text" name="jumlah_anggota_keluarga" placeholder="Masukkan Jumlah "></input><br>
	<label>Biaya Semobako</label>:<input type="text" name="biaya_sembako" placeholder="Masukkan Biaya Semobako"></input><br>
	<label>Biaya Pendidikan</label>:<input type="text" name="biaya_pendidikan" placeholder="Masukkan Biaya Pendidikan"></input><br>
	<label>Biaya Kesehatan</label>:<input type="text" name="biaya_kesehatan" placeholder="Masukkan Biaya Kesehatan"></input><br>
	<label>Biaya Listrik</label>:<input type="text" name="biaya_listrik" placeholder="Masukkan Biaya Listrik"></input><br>
	<label>Biaya Air Bersih</label>:<input type="text" name="biaya_air_bersih" placeholder="Masukkan Biaya Air Bersih"></input><br>
	<label>Biaya Pakaian</label>:<input type="text" name="biaya_pakaian" placeholder="Masukkan Biaya Pakaian"></input><br>
	<label>Biaya Lainnya</label>:<input type="text" name="biaya_lainnya" placeholder="Masukkan Biaya Lainnya"></input><br>
	<label>Status Tanah Rumah</label>:<select id="status_tanah_rumah" name="status_tanah_rumah">
		<option>-Status Tanah Rumah-</option>
		<option value="milik">Milik</option>
		<option value="sewa">Sewa</option>
		<option value="numpang">Numpang</option>
	</select><br>	
	<label>Jenis Bangunan</label>:<select id="jenis_bangunan" name="jenis_bangunan">
		<option>-Jenis Bangunan-</option>
		<option value="kayu">Kayu</option>
		<option value="batang">Batang</option>
		<option value="seng">Seng</option>
		<option value="lainnya">Lainnya</option>
	</select><br>

	<label>Minim Perabot</label>:<select id="minim_perabot" name="minim_perabot">
		<option>-Minim Perabot-</option>
		<option value="ya">Ya</option>
		<option value="tidak">Tidak</option>
	</select><br>

	<label>Lampu Tempel</label>:<select id="lampu_tempel" name="lampu_tempel">
		<option>-Lampu Tempel-</option>
		<option value="ya">Ya</option>
		<option value="tidak">Tidak</option>
	</select><br>

	<label>Layak</label>:<select id="layak" name="layak">
		<option>-Layak-</option>
		<option value="sangat layak">Sangat Layak</option>
		<option value="kurang layak">Kurang Layak</option>
		<option value="layak">Layak</option>
	</select><br>

		<label>Mampu Menyekolahkan</label>:<select id="mammpu_menyekolahkan" name="mampu_menyekolahkan">
		<option>-Mampu Menyekolahkan-</option>
		<option value="ya">Ya</option>
		<option value="tidak">Tidak</option>
	</select><br>

<label>Sumber Air</label>:<input type="text" name="sumber_air" placeholder="Masukkan Sumber Air"></input><br>
<label>Waktu Air</label>:<input type="text" name="waktu_air" placeholder="Masukkan Waktu Air"></input><br>
<label>Tempat Air</label>:<input type="text" name="tempat_air" placeholder="Masukkan Tempat Air"></input><br>
<label>Penggunaan Air</label>:<input type="text" name="pengunaan_air" placeholder="Masukkan Penggunaan Air"></input><br>

</div>

<div id="tabel_laut" style="background-color: red;">
	
	<label>Nomor Keluarga</label>:<input type="text" name="nomor_keluarga" placeholder="Masukkan Nomor Keluarga"></input><br>
	<label>Jumlah Biota</label>:<select id="jumlah_biota" onChange="input_biota()">
		<option>-pilih-</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select><br>
    <div id="container-biota"></div>
</div>

<div id="tabel_pohon" style="background-color: green;">
	
	<label>Nomor Keluarga</label>:<input type="text" name="nomor_keluarga" placeholder="Masukkan Nomor Keluarga"></input><br>

	<label>Jumlah Pohon</label>:<select id="jumlah_pohon" onChange="input_pohon()">
		<option>-pilih-</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select><br>

    <div id="container">
    </div><br>
</div>

<div id="tabel_tanaman" style="background-color: red;">
	
	<label>Nomor Keluarga</label>:<input type="text" name="nomor_keluarga" placeholder="Masukkan Nomor Keluarga"></input><br>
	<label>Jumlah Tanaman</label>:<select id="jumlah_tanaman" onChange="input_tanaman()">
		<option>-pilih-</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select><br>
    <div id="container-tanaman"></div>

</div>

</form>

</body>
    <script type="text/javascript">
    	function input_pohon(){
			var jumlah = document.getElementById('jumlah_pohon').value;
			var isi = document.getElementById('container');
			while(isi.hasChildNodes()){
				isi.removeChild(isi.lastChild);
				}
			for(i=0; i<jumlah ; i++){
				isi.appendChild(document.createTextNode("Jenis pohon "+(i+1)+" "));
				var input = document.createElement("input");
				input.type = "text";
				input.name = "Jenis_pohon"+(i+1);
				isi.appendChild(input);
				isi.appendChild(document.createElement("br"));
				}
			}
		
    	function input_tanaman(){
			var jumlah = document.getElementById('jumlah_tanaman').value;
			var isi = document.getElementById('container-tanaman');
			while(isi.hasChildNodes()){
				isi.removeChild(isi.lastChild);
				}
			for(i=0; i<jumlah ; i++){
				isi.appendChild(document.createTextNode("Jenis Tanaman "+(i+1)+" "));
				var input = document.createElement("input");
				input.type = "text";
				input.name = "Jenis_tanaman"+(i+1);
				isi.appendChild(input);
				isi.appendChild(document.createElement("br"));
				}
			}
    	function input_biota(){
			var jumlah = document.getElementById('jumlah_biota').value;
			var isi = document.getElementById('container-biota');
			while(isi.hasChildNodes()){
				isi.removeChild(isi.lastChild);
				}
			for(i=0; i<jumlah ; i++){
				isi.appendChild(document.createTextNode("Jenis biota "+(i+1)+" "));
				var input = document.createElement("input");
				input.type = "text";
				input.name = "Jenis_biota"+(i+1);
				isi.appendChild(input);
				isi.appendChild(document.createElement("br"));
				}
			}
    </script>
