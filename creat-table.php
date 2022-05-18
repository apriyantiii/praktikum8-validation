<?php
//deklarasi server, ussername, pw dan database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_pendaftaran";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
// Buat tabel daftar
$sql = "CREATE TABLE daftar (
    jenis_pendaftaran VARCHAR(10) NOT NULL,
    tanggal_masuk_sekolah DATE NOT NULL,
    nis VARCHAR(50) NOT NULL,
    nomor_peserta_ujian VARCHAR(50) NOT NULL,
    pernah_paud VARCHAR(10) NOT NULL,
    pernah_tk VARCHAR(10) NOT NULL,
    skhun VARCHAR(50) NOT NULL,
    ijazah VARCHAR(50) NOT NULL,
    hobi VARCHAR(50) NOT NULL,
    citacita VARCHAR(50) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin VARCHAR(50) NOT NULL,
    nisn VARCHAR(50) NOT NULL PRIMARY KEY,
    nik VARCHAR(50) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    agama VARCHAR(50) NOT NULL,
    berkebutuhan_khusus VARCHAR(50) NOT NULL,
    alamat VARCHAR(50) NOT NULL,
    rt VARCHAR(50) NOT NULL,
    rw VARCHAR(50) NOT NULL,
    dusun VARCHAR(50) NOT NULL,
    desa VARCHAR(50) NOT NULL,
    kecamatan VARCHAR(50) NOT NULL,
    kabupaten VARCHAR(50) NOT NULL,
    kode_pos VARCHAR(50) NOT NULL,
    tempat_tinggal VARCHAR(50) NOT NULL,
    transportasi VARCHAR(50) NOT NULL,
    hp VARCHAR(50) NOT NULL,
    telp VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    penerima_kps VARCHAR(50) NOT NULL,
    no_kps VARCHAR(50) NOT NULL,
    kewarganegaraan VARCHAR (50) NOT NULL,
    nama_negara VARCHAR (10) NOT NULL,
    nama_ayah VARCHAR(50) NOT NULL,
    tahun_lahir_ayah VARCHAR(30) NOT NULL,
    pendidikan_ayah VARCHAR(20) NOT NULL,
    pekerjaan_ayah VARCHAR(50) NOT NULL,
    penghasilan_ayah VARCHAR(30) NOT NULL,
    berkebutuhan_khusus_ayah VARCHAR(30) NOT NULL,
    nama_ibu VARCHAR(50) NOT NULL,
    tahun_lahir_ibu VARCHAR(30) NOT NULL,
    pendidikan_ibu VARCHAR(20) NOT NULL,
    pekerjaan_ibu VARCHAR(50) NOT NULL,
    penghasilan_ibu VARCHAR(30) NOT NULL,
    berkebutuhan_khusus_ibu VARCHAR(30) NOT NULL
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table created succesfully";
} else {
    echo "Error creating table" . mysqli_error($conn);
}
mysqli_close($conn);
