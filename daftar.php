<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    //Deklarasi Variabel Error
    $error_tanggal_masuk_sekolah = "";
    $error_jenis_pendaftaran = "";
    $error_nis = "";
    $error_nomor_peserta_ujian = "";
    $error_pernah_paud = "";
    $error_pernah_tk = "";
    $error_skhun = "";
    $error_ijazah = "";
    $error_hobi = "";
    $error_citacita = "";
    $error_nama = "";
    $error_jenis_kelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempat_lahir = "";
    $error_tanggal_lahir = "";
    $error_agama = "";
    $error_berkebutuhan_khusus = "";
    $error_alamat = "";
    $error_rt = "";
    $error_rw = "";
    $error_dusun = "";
    $error_desa = "";
    $error_kecamatan = "";
    $error_kode_pos = "";
    $error_tempat_tinggal = "";
    $error_transportasi = "";
    $error_hp = "";
    $error_telp = "";
    $error_email = "";
    $error_penerima_kps = "";
    $error_no_kps = "";
    $error_kewarganegaraan = "";
    $error_nama_negara = "";
    $error_nama_ayah = "";
    $error_tahun_lahir_ayah = "";
    $error_pendidikan_ayah = "";
    $error_pekerjaan_ayah = "";
    $error_penghasilan_ayah = "";
    $error_berkebutuhan_khusus_ayah = "";
    $error_nama_ibu = "";
    $error_tahun_lahir_ibu = "";
    $error_pendidikan_ibu = "";
    $error_pekerjaan_ibu = "";
    $error_penghasilan_ibu = "";
    $error_berkebutuhan_khusus_ibu = "";

    //Deklarasi Variabel
    $jenis_pendaftaran = "";
    $tanggal_masuk_sekolah = "";
    $nis = "";
    $nomor_peserta_ujian = "";
    $pernah_paud = "";
    $pernah_tk = "";
    $skhun = "";
    $ijazah = "";
    $hobi = "";
    $citacita = "";
    $nama = "";
    $jenis_kelamin = "";
    $nisn = "";
    $nik = "";
    $tempat_lahir = "";
    $tanggal_lahir = "";
    $agama = "";
    $berkebutuhan_khusus = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $dusun = "";
    $desa = "";
    $kecamatan = "";
    $kode_pos = "";
    $tempat_tinggal = "";
    $transportasi = "";
    $hp = "";
    $telp = "";
    $email = "";
    $penerima_kps = "";
    $no_kps = "";
    $kewarganegaraan = "";
    $nama_negara = "";
    $nama_ayah = "";
    $tahun_lahir_ayah = "";
    $pendidikan_ayah = "";
    $pekerjaan_ayah = "";
    $penghasilan_ayah = "";
    $berkebutuhan_khusus_ayah = "";
    $nama_ibu = "";
    $tahun_lahir_ibu = "";
    $pendidikan_ibu = "";
    $pekerjaan_ibu = "";
    $penghasilan_ibu = "";
    $berkebutuhan_khusus_ibu = "";

    $pesan_sukses = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        //Jenis Pendaftaran
        if (empty($_POST["jenis_pendaftaran"])) {
            $error_jenis_pendaftaran = "Jenis Pendaftaran Tidak Boleh Kosong";
        } else {
            $jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
        }

        //Tanggal Masuk Sekolah
        if (empty($_POST["tanggal_masuk_sekolah"])) {
            $error_tanggal_masuk_sekolah = "Tanggal Daftar tidak boleh kosong";
        } else {
            $tanggal_masuk_sekolah = cek_input($_POST["tanggal_masuk_sekolah"]);
            $tanggal_masuk_sekolah = date('Y-m-d', strtotime($tanggal_masuk_sekolah));
        }

        //NIS
        if (empty($_POST["nis"])) {
            $error_nis = "NIS tidak boleh kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS hanya boleh berisi angka";
            }
        }

        //Nomor Peserta Ujian
        if (empty($_POST["nomor_peserta_ujian"])) {
            $error_nomor_peserta_ujian = "Nomor Peserta Ujian tidak boleh kosong";
        } else {
            $nis = cek_input($_POST["nomor_peserta_ujian"]);
            if (!is_numeric($nomor_peserta_ujian)) {
                $error_nomor_peserta_ujian = "Nomor peserta ujian hanya boleh berisi angka";
            }
        }

        // Pernah PAUD
        if (empty($_POST["pernah_paud"])) {
            $error_pernah_paud = "Pilihan tidak boleh kosong";
        } else {
            $pernah_paud = cek_input($_POST["pernah_paud"]);
        }

        //Pernah TK
        if (empty($_POST["pernah_tk"])) {
            $error_pernah_tk = "Pilihan tidak boleh kosong";
        } else {
            $pernah_tk = cek_input($_POST["pernah_tk"]);
        }

        //No Seri SKHUN Sebelumnya
        if (empty($_POST["skhun"])) {
            $error_skhun = "Nomer Seri SKHUN tidak boleh kosong";
        } else {
            $skhun = cek_input($_POST["skhun"]);
            if (!is_numeric($skhun)) {
                $error_skhun = "Nomer Seri SKHUN hanya boleh berisi angka";
            } elseif (strlen($skhun) != 16) {
                $error_skhun = "Panjang Nomer Seri SKHUN harus 16 digit";
            }
        }

        //No seri ijazah sebelumnya
        if (empty($_POST["ijazah"])) {
            $error_ijazah = "Nomer Seri Ijazah tidak boleh kosong";
        } else {
            $ijazah = cek_input($_POST["ijazah"]);
            if (!is_numeric($ijazah)) {
                $error_ijazah = "Nomer Seri Ijazah hanya boleh berisi angka";
            } elseif (strlen($ijazah) != 16) {
                $error_ijazah = "Panjang Nomer Seri Ijazah harus 16 digit";
            }
        }

        //Hobi
        if (!isset($_POST["hobi"])) {
            $error_hobi = "Hobi harus dipilih";
        } else {
            $hobi = cek_input($_POST["hobi"]);
            if ($hobi == "") {
                $error_hobi = "Harus memilih hobi";
            } else {
                $error_hobi = "";
            }
        }

        //Cita-cita
        if (!isset($_POST["citacita"])) {
            $error_citacita = "Cita-cita harus dipilih";
        } else {
            $citacita = cek_input($_POST["citacita"]);
            if ($citacita == "") {
                $error_citacita = "Harus memilih citacita";
            } else {
                $error_citacita = "";
            }
        }

        //Nama Lengkap
        if (empty($_POST["nama"])) {
            $error_nama = "Nama tidak boleh kosong";
        } else {
            $nama = cek_input($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z]*$/", $nama)) {
                $namaErr = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        //Jenis Kelamin
        if (empty($_POST["jenis_kelamin"])) {
            $error_jenis_kelamin = "Pilihan tidak boleh kosong";
        } else {
            $jenis_kelamin = cek_input($_POST["jenis_kelamin"]);
        }

        //NISN
        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN tidak boleh kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN hanya boleh berisi angka";
            }
        }

        //NIK
        if (empty($_POST["nik"])) {
            $error_nik = "NIK tidak boleh kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK hanya boleh berisi angka";
            }
        }

        //Tempat Lahir
        if (empty($_POST["tempat_lahir"])) {
            $error_tempat_lahir = "Tempat lahir tidak boleh kosong";
        } else {
            $tempat_lahir = cek_input($_POST["tempat_lahir"]);
            if (!preg_match("/^[a-zA-z ]*$/", $tempat_lahir)) {
                $error_tempat_lahir = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }

        //Tanggal Lahir
        if (empty($_POST["tanggal_lahir"])) {
            $error_tanggal_lahir = "Tanggal Lahir tidak boleh kosong";
        } else {
            $tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
            $tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
        }

        //Agama
        if (!isset($_POST["agama"])) {
            $error_agama = "Agama harus dipilih";
        } else {
            $agama = cek_input($_POST["agama"]);
            if ($agama == "") {
                $error_agama = "Harus memilih agama";
            } else {
                $error_agama = "";
            }
        }

        //Berkebutuhan Khusus
        if (!isset($_POST["berkebutuhan_khusus"])) {
            $error_berkebutuhan_khusus = "Berkebutuhan Khusus atau tidak harus dipilih";
        } else {
            $berkebutuhan_khusus = cek_input($_POST["berkebutuhan_khusus"]);
            if ($berkebutuhan_khusus == "") {
                $error_berkebutuhan_khusus = "Harus memilih Kebutuhan khusus";
            } else {
                $error_berkebutuhan_khusus = "";
            }
        }

        //Alamat Jalan
        if (empty($_POST["alamat"])) {
            $error_alamat = "Alamat Jalan tidak boleh kosong";
        } else {
            $alamat = cek_input($_POST["alamat"]);
        }

        //RT
        if (empty($_POST["rt"])) {
            $error_rt = "RT tidak boleh kosong";
        } else {
            $rt = cek_input($_POST["rt"]);
            if (!is_numeric($rt)) {
                $error_rt = "RT hanya boleh berisi angka";
            }
        }

        //RW
        if (empty($_POST["rw"])) {
            $error_rw = "RW tidak boleh kosong";
        } else {
            $rw = cek_input($_POST["rw"]);
            if (!is_numeric($rw)) {
                $error_rw = "RW hanya boleh berisi angka";
            }
        }

        //Nama Dusun
        if (empty($_POST["dusun"])) {
            $error_dusun = "Dusun tidak boleh kosong";
        } else {
            $dusun = cek_input($_POST["dusun"]);
            if (!preg_match("/^[a-zA-z ]*$/", $dusun)) {
                $error_dusun = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }

        //Nama Kelurahan/Desa
        if (empty($_POST["desa"])) {
            $error_desa = "Desa/Kelurahan tidak boleh kosong";
        } else {
            $desa = cek_input($_POST["desa"]);
            if (!preg_match("/^[a-zA-z ]*$/", $desa)) {
                $error_desa = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }

        //Kecamatan
        if (empty($_POST["kecamatan"])) {
            $error_kecamatan = "Kecamatan tidak boleh kosong";
        } else {
            $kecamatan = cek_input($_POST["kecamatan"]);
            if (!preg_match("/^[a-zA-z ]*$/", $kecamatan)) {
                $error_kecamatan = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }

        //Kode Pos
        if (empty($_POST["kode_pos"])) {
            $error_kode_pos = "Kode Pos tidak boleh kosong";
        } else {
            $kode_pos = cek_input($_POST["kode_pos"]);
            if (!is_numeric($kode_pos)) {
                $error_kode_pos = "Kode Pos hanya boleh berisi angka";
            }
        }

        //Tempat Tinggal
        if (!isset($_POST["tempat_tinggal"])) {
            $error_tempat_tinggal = "Tempat Tinggal harus dipilih";
        } else {
            $tempat_tinggal = cek_input($_POST["tempat_tinggal"]);
            if ($tempat_tinggal == "") {
                $error_tempat_tinggal = "Harus memilih Tempat tinggal";
            } else {
                $error_tempat_tinggal = "";
            }
        }

        //Mode Transportasi
        if (!isset($_POST["tempat_tinggal"])) {
            $error_transportasi = "Transportasi harus dipilih";
        } else {
            $transportasi = cek_input($_POST["transportasi"]);
            if ($transportasi == "") {
                $error_transportasi = "Harus memilih Tempat tinggal";
            } else {
                $error_transportasi = "";
            }
        }

        //Nomor HP
        if (empty($_POST["hp"])) {
            $error_hp = "No. HP tidak boleh kosong";
        } else {
            $hp = cek_input($_POST["hp"]);
            if (!is_numeric($hp)) {
                $error_hp = "Nomor HP hanya boleh angka";
            }
        }

        //Nomor Telepon
        if (empty($_POST["telp"])) {
            $error_telp = "Telp tidak boleh kosong";
        } else {
            $telp = cek_input($_POST["telp"]);
            if (!is_numeric($telp)) {
                $error_telp = "Nomor Telepon hanya boleh angka";
            }
        }

        //Email
        if (empty($_POST["email"])) {
            $error_email = "Email tidak boleh kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
            }
        }

        //Penerima KPS/PKH/KIS
        if (empty($_POST["penerima_kps"])) {
            $error_penerima_kps = "Pilihan tidak boleh kosong";
        } else {
            $penerima_kps = cek_input($_POST["penerima_kps"]);
        }

        //No. KPS/PKH/KIP
        $no_kps = cek_input($_POST["no_kps"]);
        if (!is_numeric($no_kps)) {
            $error_no_kps = "Nomor KPS/KKS/PKH/KIP hanya boleh angka";
        }

        //Kewarganegaraan
        if (empty($_POST["kewarganegaraan"])) {
            $error_kewarganegaraan = "Pilihan tidak boleh kosong";
        } else {
            $kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
        }

        //Nama Negara
        if ($kewarganegaraan == "WNA") {
            if (empty($_POST["nama_negara"])) {
                $error_nama_negara = "Nama Negara tidak boleh kosong";
            } else {
                $nama_negara = cek_input($_POST["nama_negara"]);
                if (!preg_match("/^[a-zA-z ]*$/", $nama_negara)) {
                    $error_nama_negara = "Inputan Hanya Boleh Huruf dan Spasi";
                }
            }
        } elseif ($kewarganegaraan == "WNI") {
            $nama_negara = "Indonesia";
        }
        //Nama Ayah Kandung
        if (empty($_POST["nama_ayah"])) {
            $error_nama_ayah = "Nama Ayah tidak boleh kosong";
        } else {
            $nama_ayah = cek_input($_POST["nama_ayah"]);
            if (!preg_match("/^[a-zA-z ]*$/", $nama_ayah)) {
                $error_nama_ayah = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }


        //Tahun Lahir Ayah
        if (empty($_POST["tahun_lahir_ayah"])) {
            $error_tahun_lahir_ayah = "Tahun lahir ayah tidak boleh kosong";
        } else {
            $tahun_lahir_ayah = cek_input($_POST["tahun_lahir_ayah"]);
            if (!is_numeric($tahun_lahir_ayah)) {
                $error_tahun_lahir_ayah = "Tahun Lahir hanya boleh berisi angka";
            }
        }

        //Pendidikan Ayah
        if (empty($_POST["pendidikan_ayah"])) {
            $error_pendidikan_ayah = "Pendidikan Ayah tidak boleh kosong";
        } else {
            $pendidikan_ayah = cek_input($_POST["pendidikan_ayah"]);
            if (!preg_match("/^[a-zA-z ]*$/", $pendidikan_ayah)) {
                $error_pendidikan_ayah = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }

        //Pekerjaan Ayah
        if (!isset($_POST["pekerjaan_ayah"])) {
            $error_pekerjaan_ayah = "Pekerjaan harus dipilih";
        } else {
            $pekerjaan_ayah = cek_input($_POST["pekerjaan_ayah"]);
            if ($pekerjaan_ayah == "") {
                $error_pekerjaan_ayah = "Harus memilih pekerjaan ayah";
            } else {
                $error_pekerjaan_ayah = "";
            }
        }


        //Penghasilan Bulanan Ayah
        if (!isset($_POST["penghasilan_ayah"])) {
            $error_penghasilan_ayah = "Penghasilan ayah harus dipilih";
        } else {
            $penghasilan_ayah = cek_input($_POST["penghasilan_ayah"]);
            if ($penghasilan_ayah == "") {
                $error_penghasilan_ayah = "Harus memilih penghasilan ayah";
            } else {
                $error_penghasilan_ayah = "";
            }
        }

        //Berkebutuhan Khusus
        if (!isset($_POST["berkebutuhan_khusus"])) {
            $error_berkebutuhan_khusus = "Berkebutuhan Khusus atau tidak harus dipilih";
        } else {
            $berkebutuhan_khusus = cek_input($_POST["berkebutuhan_khusus"]);
            if ($berkebutuhan_khusus == "") {
                $error_berkebutuhan_khusus = "Harus memilih Kebutuhan khusus";
            } else {
                $error_berkebutuhan_khusus = "";
            }
        }

        //Nama Ibu Kandung
        if (empty($_POST["nama_ibu"])) {
            $error_nama_ibu = "Nama tidak boleh kosong";
        } else {
            $nama_ibu = cek_input($_POST["nama_ibu"]);
            if (!preg_match("/^[a-zA-z ]*$/", $nama_ibu)) {
                $error_nama_ibu = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }

        //Tahun Lahir Ibu
        if (empty($_POST["tahun_lahir_ibu"])) {
            $error_tahun_lahir_ibu = "Tahun lahir ibu tidak boleh kosong";
        } else {
            $tahun_lahir_ibu = cek_input($_POST["tahun_lahir_ibu"]);
            if (!is_numeric($tahun_lahir_ibu)) {
                $error_tahun_lahir_ibu = "Tahun Lahir hanya boleh berisi angka";
            }
        }

        //Pendidikan
        if (empty($_POST["pendidikan_ibu"])) {
            $error_pendidikan_ibu = "Pendidikan Ibu tidak boleh kosong";
        } else {
            $pendidikan_ibu = cek_input($_POST["pendidikan_ibu"]);
            if (!preg_match("/^[a-zA-z ]*$/", $pendidikan_ibu)) {
                $error_pendidikan_ibu = "Inputan Hanya Boleh Huruf dan Spasi";
            }
        }

        //Pekerjaan Ibu
        if (!isset($_POST["pekerjaan_ibu"])) {
            $error_pekerjaan_ibu = "Pekerjaan Ibu harus dipilih";
        } else {
            $pekerjaan_ibu = cek_input($_POST["pekerjaan_ibu"]);
            if ($pekerjaan_ibu == "") {
                $error_pekerjaan_ibu = "Harus memilih pekerjaan ibu";
            } else {
                $error_pekerjaan_ibu = "";
            }
        }

        //Penghasilan Bulanan
        if (!isset($_POST["penghasilan_ibu"])) {
            $error_penghasilan_ibu = "Penghasilan ibu harus dipilih";
        } else {
            $penghasilan_ibu = cek_input($_POST["penghasilan_ibu"]);
            if ($penghasilan_ibu == "") {
                $error_penghasilan_ibu = "Harus memilih penghasilan ibu";
            } else {
                $error_penghasilan_ibu = "";
            }
        }

        //Berkebutuhan Khusus
        if (!isset($_POST["berkebutuhan_khusus"])) {
            $error_berkebutuhan_khusus = "Berkebutuhan Khusus atau tidak harus dipilih";
        } else {
            $berkebutuhan_khusus = cek_input($_POST["berkebutuhan_khusus"]);
            if ($berkebutuhan_khusus == "") {
                $error_berkebutuhan_khusus = "Harus memilih Kebutuhan khusus";
            } else {
                $error_berkebutuhan_khusus = "";
            }
        }
    }
    // Jika tidak ada error maka data akan disimpan
    if ($error_jenis_pendaftaran = "" && $error_tanggal_masuk_sekolah = "" && $error_nis = "" && $error_nomor_peserta_ujian = "" && $error_pernah_paud = "" && $error_pernah_tk = "" && $error_skhun = "" && $error_ijazah = "" && $error_hobi = "" && $error_citacita = "" && $error_nama = "" && $error_jenis_kelamin = "" && $error_nisn = "" && $error_nik = "" && $error_tempat_lahir = "" && $error_tanggal_lahir = "" && $error_agama = "" && $error_berkebutuhan_khusus = "" && $error_alamat = "" && $error_rt = "" && $error_rw = "" && $error_dusun = "" && $error_desa = "" && $error_kecamatan = "" && $error_kode_pos = "" && $error_tempat_tinggal = "" && $error_transportasi = "" && $error_hp = "" && $error_telp = "" && $error_email = "" && $error_penerima_kps = "" && $error_no_kps = "" && $error_kewarganegaraan = "" && $error_nama_negara = "" && $error_nama_ayah = "" && $error_tahun_lahir_ayah = "" && $error_pendidikan_ayah = "" && $error_pekerjaan_ayah = "" && $error_penghasilan_ayah = "" && $error_berkebutuhan_khusus_ayah = "" && $error_nama_ibu = "" && $error_tahun_lahir_ibu = "" && $error_pendidikan_ibu = "" && $error_pekerjaan_ibu = "" && $error_penghasilan_ibu = "" && $error_berkebutuhan_khusus_ibu = "") {

        include 'koneksi.php';

        // Memasukkan data ke tabel daftar
        $sql = "INSERT INTO daftar VALUES ('$jenis_pendaftaran', '$tanggal_masuk_sekolah', '$nis', '$nomor_peserta_ujian', '$pernah_paud', '$pernah_tk, '$skhun', '$ijazah', '$hobi', '$citacita', '$nama', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat', $rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$transportasi', '$hp', '$telp', '$mail', '$penerima_kps', '$no_kps', '$kewarganegaraan', '$nama_negara', '$nama_ayah', '$tahun_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$berkebutuhan_khusus_ayah', '$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$berkebutuhan_khusus_ibu')";
        mysqli_query($koneksi, $sql);

        $pesan_sukses = "Berhasil simpan data";
    } else {
        $pesan_sukses = "Gagal simpan data";
    }

    function cek_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <!-- class untuk menampilkan isi formulir -->
    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">FORMULIR PESERTA DIDIK</h2><br>

        <div class="card-body">
            <!-- Mengarahkan action ke halaman itu sendiri -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                <div class=" form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label>Tanggal Pengisian</label>
                    </div>
                    <div class="col-md-9">
                        <input type="date" name="" class="form-control">
                    </div>
                </div>
        </div><br>
    </div>

    <!-- FORM REGISTRASI PESERTA DIDIK -->
    <div class="container">
        <h3 class="alert alert-primary text-left mt-3">Registrasi Peserta Didik</h3><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Jenis Pendaftaran</label>
                </div>
                <div class="col-md-9">
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio1" id="radio2" checked="">
                        <label>Siswa Baru</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio1" id="radio2" checked="">
                        <label>Pindahan</label>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Tanggal Masuk Sekolah</label>
                </div>
                <div class="col-md-9">
                    <input type="date" name="" class="form-control" <?php echo ($error_tanggal_masuk_sekolah != "" ? "is_invalid" : ""); ?>" id="tanggal_masuk_sekolah" value="<?php echo $tanggal_masuk_sekolah; ?>"><span class="warning"><?php echo $error_tanggal_masuk_sekolah; ?></span>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>NIS</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Masukkan NIS Anda" <?php echo ($error_nis != "" ? "is_invalid" : ""); ?>" id="nis" value="<?php echo $nis; ?>"><span class="warning"><?php echo $error_nis; ?></span>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Nomor Peserta Ujian</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Masukkan Nomor Peserta Ujian Anda" value="<?php echo $nomor_peserta_ujian; ?>"><span class="warning"><?php echo $error_nomor_peserta_ujian; ?></span>
                    <small>
                        <font color="black">*Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat</font>
                        <font color="red">SKHUN SD</font>
                        <font color="black">, diisi bagi peserta jenjang SMP</font>
                    </small>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Apakah Pernah PAUD</label>
                </div>
                <div class="col-md-9">
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio1" id="radio2" checked="">
                        <label>Ya</label>
                        <span class="warning"><?php echo $error_pernah_paud; ?></span>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio1" id="radio2" checked="">
                        <label>Tidak</label>
                        <span class="warning"><?php echo $error_pernah_paud; ?></span>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Apakah Pernah TK</label>
                </div>
                <div class="col-md-9">
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio2" id="radio2" checked="">
                        <label>Ya</label>
                        <span class="warning"><?php echo $error_pernah_tk; ?></span>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio2" id="radio2" checked="">
                        <label>Tidak</label>
                        <span class="warning"><?php echo $error_pernah_tk; ?></span>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>No. Seri SKHUN Sebelumnya</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Masukkan Nomor SKHUN Anda" value="<?php echo ($skhun != "" ? "is_invalid" : ""); ?>" id="skhun" placeholder="No. Seri SKHUN Sebelumnya" value="<?php echo $skhun; ?>"><span class="warning"><?php echo $error_skhun; ?></span>
                </div>
                <div class="col-md-4">
                    <small>
                        <font color="black">Diisi 16 digit yang tertera di</font>
                        <font color="red">SKHUN SD</font>
                        <font color="black">, diisi bagi PD jenjang SMP</font>
                    </small>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>No. Seri IJAZAH Sebelumnya</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Masukkan Nomor SKHUN Anda" value="<?php echo $ijazah; ?>"><span class="warning"><?php echo $error_ijazah; ?></span>
                </div>
                <div class="col-md-4">
                    <small>
                        <font color="black">Diisi 16 digit yang tertera di</font>
                        <font color="red">Ijazah SD</font>
                        <font color="black">, diisi bagi PD jenjang SMP</font>
                    </small>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Hobi</label>
                </div>
                <div class="col-md-9">
                    <select name="hobi" class="col-md-12" value="<?php echo $hobi; ?>">
                        <option value=""></option>
                        <option value="Olahraga" <?php if (isset($hobi) && $hobi == "Olahraga") echo "selected"; ?>>Olahraga</option>
                        <option value="Kesenian" <?php if (isset($hobi) && $hobi == "Kesenian") echo "selected"; ?>>Kesenian</option>
                        <option value="Membaca" <?php if (isset($hobi) && $hobi == "Membaca") echo "selected"; ?>>Membaca</option>
                        <option value="Menulis" <?php if (isset($hobi) && $hobi == "Menulis") echo "selected"; ?>>Menulis</option>
                        <option value="Traveling" <?php if (isset($hobi) && $hobi == "Traveling") echo "selected"; ?>>Traveling</option>
                        <option value="Lainnya" <?php if (isset($hobi) && $hobi == "Lainnya") echo "selected"; ?>>Lainnya</option>
                    </select>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Cita-cita</label>
                </div>
                <div class="col-md-9">
                    <select name="cita2" class="col-md-12" value="<?php echo $citacita; ?>"><small>A=PNS, B=TNI/POLRI, C=Guru/Dosen, D=Dokter, E=Politikus, F=Wiraswasta, G=Seni/Lukis/Artis/Sejenis, H=Lainnya</small><span class="warning"><?php echo $error_citacita; ?></span>
                        <option value=""></option>
                        <option value="PNS" <?php if (isset($citacita) && $citacita == "PNS") echo "selected"; ?>>PNS</option>
                        <option value="TNI/POLRI" <?php if (isset($citacita) && $citacita == "TNI/POLRI") echo "selected"; ?>>TNI/POLRI</option>
                        <option value="Guru/Dosen" <?php if (isset($citacita) && $citacita == "Guru/Dosen") echo "selected"; ?>>Guru/Dosen</option>
                        <option value="Dokter" <?php if (isset($citacita) && $citacita == "Dokter") echo "selected"; ?>>Dokter</option>
                        <option value="Politikus" <?php if (isset($citacita) && $citacita == "Politikus") echo "selected"; ?>>Politikus</option>
                        <option value="Wiraswasta" <?php if (isset($citacita) && $citacita == "Wirausaha") echo "selected"; ?>>Wiraswasta</option>
                        <option value="Seni/Lukis/Artis/Sejenis" <?php if (isset($citacita) && $citacita == "Seni/Lukis/Artis/Sejenis") echo "selected"; ?>>Seni/Lukis/Artis/Sejenis</option>
                        <option value="Lainnya" <?php if (isset($citacita) && $citacita == "Lainnya") echo "selected"; ?>>Lainnya</option>
                    </select>
                </div>
            </div>
        </div><br>


    </div><br>

    <!-- FORM DATA PRIBADI -->
    <div class="container">
        <h3 class="alert alert-primary text-left mt-3">Data Pribadi</h3><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Nama Lengkap</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" <?php echo ($error_nama != "" ? "is_invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>Jenis Kelamin</label>
                </div>
                <div class="col-md-9">
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio1" id="radio2" checked="">
                        <label>Laki-laki</label>
                        <span class="warning"><?php echo $error_jenis_kelamin; ?></span>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="radio1" id="radio2" checked="">
                        <label>Perempuan</label>
                        <span class="warning"><?php echo $error_jenis_kelamin; ?></span>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>NISN</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Masukkan NISN Anda" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
                </div>
            </div>
        </div><br>

        <div class="form-group">
            <div class="row">
                <div class="col-md-3">
                    <label>NIK</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Masukkan NIK Anda" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label><br>
                    <br><input type="text" name="" class="form-control" placeholder="Masukkan Tempat Lahir Anda" id="TempatLahir" <?php echo ($error_tempat_lahir != "" ? "is_invalid" : ""); ?>" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>"><span class="warning"><?php echo $error_tempat_lahir; ?></span>
                </div>
            </div><br>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label><br>
                    <br><input type="date" name="" class="form-control" <?php echo ($error_tanggal_lahir != "" ? "is_invalid" : ""); ?>" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>"><span class="warning"><?php echo $error_tanggal_lahir; ?></span>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Agama</label>
                    </div>
                    <br>
                    <div class="col-md-9">
                        <br><select name="agama" class="col-md-12" <?php echo ($error_agama != "" ? "is_invalid" : ""); ?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>">
                            <sma><span class="warning"><?php echo $error_agama; ?></span>
                                <option value=""></option>
                                <option value="Islam" <?php if (isset($agama) && $agama == "Islam") echo "selected"; ?>>Islam</option>
                                <option value="Kristen/Protestan" <?php if (isset($agama) && $agama == "Kristen/Protestan") echo "selected"; ?>>Kristen/Protestan</option>
                                <option value="Katholik" <?php if (isset($agama) && $agama == "Katholik") echo "selected"; ?>>Katholik</option>
                                <option value="Hindu" <?php if (isset($agama) && $agama == "Hindu") echo "selected"; ?>>Hindu</option>
                                <option value="Budha" <?php if (isset($agama) && $agama == "Budha") echo "selected"; ?>>Budha</option>
                                <option value="KhongHuChu" <?php if (isset($agama) && $agama == "KhongHuChu") echo "selected"; ?>>Khong Hu Chu</option>
                                <option value="Lainnya" <?php if (isset($agama) && $agama == "Lainnya") echo "selected"; ?>>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Berkebutuhan Khusus</label>
                    </div>
                    <br>
                    <div class="col-md-9">
                        <br><select name="tuna" class="col-md-12" value="<?php echo $berkebutuhan_khusus; ?>"><span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>>
                            <option value=""></option>
                            <option value="Tidak" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Tidak") echo "selected"; ?>>Tidak</option>
                            <option value="Netra" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Netra") echo "selected"; ?>>Netra</option>
                            <option value="Grahita" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Grahita") echo "selected"; ?>>Grahita</option>
                            <option value="Daksa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Daksa") echo "selected"; ?>>Daksa</option>
                            <option value="Laras" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Laras") echo "selected"; ?>>Laras</option>
                            <option value="Wicara" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Wicara") echo "selected"; ?>>Wicara</option>
                            <option value="TunaGanda" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "TunaGanda") echo "selected"; ?>>Tuna Ganda</option>
                            <option value="Hiperaktif" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                            <option value="CerdasIstimewa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "CerdasIstimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                            <option value="BakatIstimewa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "BakatIstimewa") echo "selected"; ?>>Bakat Istimewa</option>
                            <option value="KesulitanBelajar" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "KesulitanBelajar") echo "selected"; ?>>Kesulitan Belajar</option>
                            <option value="Narkoba" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Narkoba") echo "selected"; ?>>Narkoba</option>
                            <option value="indigo" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Indigo") echo "selected"; ?>>Indigo</option>
                            <option value="DownSyndrome" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "DownSyndrome") echo "selected"; ?>>Down Syndrome</option>
                            <option value="Autis" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Autis") echo "selected"; ?>>Autis</option>
                            <option value="Lainnya" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Lainnya") echo "selected"; ?>></option>
                        </select>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Alamat Jalan</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap Anda" <?php echo ($error_alamat != "" ? "is_invalid" : ""); ?>" id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>"><span class="warning"><?php echo $error_alamat; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>RT</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan RT Anda" <?php echo ($error_rt != "" ? "is_invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>RW</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan RW Anda" <?php echo ($error_rw != "" ? "is_invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Nama Dusun</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Nama Dusun Anda" <?php echo ($error_dusun != "" ? "is_invalid" : ""); ?>" id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>"><span class="warning"><?php echo $error_dusun; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Nama Kelurahan/ Desa</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Nama Kelurahan/ Desa Anda" <?php echo ($error_desa != "" ? "is_invalid" : ""); ?>" id="desa" placeholder="Desa/Kelurahan" value="<?php echo $desa; ?>"><span class="warning"><?php echo $error_desa; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Kecamatan</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Kecamatan Anda" <?php echo ($error_kecamatan != "" ? "is_invalid" : ""); ?>" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"><span class="warning"><?php echo $error_kecamatan; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Kode Pos</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Kode Pos Anda" <?php echo ($error_kode_pos != "" ? "is_invalid" : ""); ?>" id="kode_pos" placeholder="Kode Pos" value="<?php echo $kode_pos; ?>"><span class="warning"><?php echo $error_kode_pos; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Tempat Tinggal</label>
                    </div>
                    <div class="col-md-9">
                        <br><select name="tempat_tinggal" class="col-md-12" <?php echo ($error_tempat_tinggal != "" ? "is_invalid" : ""); ?>" id="tempat_tinggal" placeholder="Tempat Tinggal" value="<?php echo $tempat_tinggal; ?>"><span class="warning"><?php echo $error_tempat_tinggal; ?></span>
                            <option value=""></option>
                            <option value="BersamaOrangTua" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "BersamaOrangTua") echo "selected"; ?>>Bersama Orang Tua</option>
                            <option value="Wali" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Wali") echo "selected"; ?>>Wali</option>
                            <option value="Kos" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Kos") echo "selected"; ?>>Kos</option>
                            <option value="Asrama" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Asrama") echo "selected"; ?>>Asrama</option>
                            <option value="PantiAsuhan" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "PantiAsuhan") echo "selected"; ?>>Panti Asuhan</option>
                            <option value="Lainnya" <?php if (isset($tempat_tinggal) && $tempat_tinggal == "Lainnya") echo "selected"; ?>>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Mode Transportasi</label>
                    </div>
                    <div class="col-md-9">
                        <br><select name="transportasi" class="col-md-12" value="<?php echo $transportasi; ?>"><span class="warning"><?php echo $error_transportasi; ?></span>>
                            <option value=""></option>
                            <option value="JalanKaki" <?php if (isset($transportasi) && $transportasi == "JalanKaki") echo "selected"; ?>>Jalan Kaki</option>
                            <option value="KendaraanPribadi" <?php if (isset($transportasi) && $transportasi == "KendaraanPribadi") echo "selected"; ?>>Kendaraan Pribadi</option>
                            <option value="KendaraanUmum" <?php if (isset($transportasi) && $transportasi == "KendaraanUmum") echo "selected"; ?>>Kendaraan umum/angkot/pete-pete</option>
                            <option value="JemputanSekolah" <?php if (isset($transportasi) && $transportasi == "JemputanSekolah") echo "selected"; ?>>Jemputan Sekolah</option>
                            <option value="KeretaApi" <?php if (isset($transportasi) && $transportasi == "KeretaApi") echo "selected"; ?>>Kereta Api</option>
                            <option value="ojek" <?php if (isset($transportasi) && $transportasi == "Ojek") echo "selected"; ?>>Ojek</option>
                            <option value="Lainnya" <?php if (isset($transportasi) && $transportasi == "Lainnya") echo "selected"; ?>>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Nomor HP</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Nomor HP Anda" <?php echo ($error_hp != "" ? "is_invalid" : ""); ?>" id="hp" placeholder="No. HP" value="<?php echo $hp; ?>"><span class="warning"><?php echo $error_hp; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Nomor Telepon</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Nomor Telepon Anda" <?php echo ($error_telp != "" ? "is_invalid" : ""); ?>" id="telp" value="<?php echo $telp; ?>"><span class="warning"><?php echo $error_telp; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>E-mail Pribadi</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Email Pribadi Anda" <?php echo ($error_email != "" ? "is_invalid" : ""); ?>" id="email" value="<?php echo $email; ?>"><span class="warning"><?php echo $error_email; ?></span>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Penerima KPS/PKH/KIP</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check-inline">
                            <br><input type="radio" class="form-check-input" name="radio3" id="radio3" checked="">
                            <label>Ya</label>
                            <span class="warning"><?php echo $error_penerima_kps; ?></span>
                        </div>
                        <div class="form-check-inline">
                            <br><input type="radio" class="form-check-input" name="radio3" id="radio3" checked="">
                            <label>Tidak</label>
                            <span class="warning"><?php echo $error_penerima_kps; ?></span>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>No. KPS/KKS/PKH/KIP</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Nomor KPS/KKS/PKH/KIP Anda" <?php echo ($error_no_kps != "" ? "is_invalid" : ""); ?>" id="no_kps" placeholder="Nomor KPS/KKS/PKH/KIP" value="<?php echo $no_kps; ?>"><span class="warning"><?php echo $error_no_kps; ?></span>
                        <small>*)Apabila Menerima</small>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Kewarganegaraan</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check-inline">
                            <br><input type="radio" class="form-check-input" name="radio4" id="radio4" checked="">
                            <label>Indonesia(WNI)</label>
                            <span class="warning"><?php echo $error_kewarganegaraan; ?></span>
                        </div>
                        <div class="form-check-inline">
                            <br><input type="radio" class="form-check-input" name="radio4" id="radio4" checked="">
                            <label>Asing (WNA)</label>
                            <span class="warning"><?php echo $error_kewarganegaraan; ?></span>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <br><label>Nama Negara</label>
                    </div>
                    <div class="col-md-9">
                        <br><input type="text" class="form-control" placeholder="Masukkan Nama Negara Anda" <?php echo ($error_nama_negara != "" ? "is_invalid" : ""); ?>" id="nama_negara" placeholder="Nama Negara" value="<?php echo $nama_negara; ?>"><span class="warning"><?php echo $error_nama_negara; ?></span>
                    </div>
                </div>
            </div><br>



            <!-- DATA AYAH KANDUNG -->
            <div class="container">
                <h3 class="alert alert-primary text-left mt-3">Data Ayah Kandung</h3><br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <br><label>Nama Ayah Kandung</label>
                        </div>
                        <div class="col-md-9">
                            <br><input type="text" class="form-control" placeholder="Masukkan Nama Ayah Kandung Anda">
                        </div>
                    </div>
                </div><br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <br><label>Tahun Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <br><input type="text" class="form-control" placeholder="Masukkan Tahun Lahir">
                        </div>
                    </div>
                </div><br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <br><label>Pendidikan</label>
                        </div>
                        <div class="col-md-9">
                            <br><select name="pendidikan" class="col-md-12">
                                <option value=""></option>
                                <option value="TidakSekolah" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "TidakSekolah") echo "selected"; ?>>Tidak Sekolah</option>
                                <option value="PutusSD" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "PutusSD") echo "selected"; ?>>Putus SD</option>
                                <option value="SD" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "SD") echo "selected"; ?>>SD Sederajat</option>
                                <option value="SMP" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "SMP") echo "selected"; ?>>SMP Sederajat</option>
                                <option value="SMA" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "SMA") echo "selected"; ?>>SMA Sederajat</option>
                                <option value="D1/D2/D3" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "D1/D2/D3") echo "selected"; ?>>D1/D2/D3</option>
                                <option value="S1" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "S1") echo "selected"; ?>>S1</option>
                                <option value="S2" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "S2") echo "selected"; ?>>S2</option>
                                <option value="Lainnya" <?php if (isset($pendidikan_ayah) && $pendidikan_ayah == "Lainnya") echo "selected"; ?>>Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div><br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <br><label>Pekerjaan</label>
                        </div>
                        <div class="col-md-9">
                            <br><select name="pekerjaan" class="col-md-12">
                                <option value=""></option>
                                <option value="TidakBekerja" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "TidakBekerja") echo "selected"; ?>>Tidak Bekerja</option>
                                <option value="Nelayan" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "Nelayan") echo "selected"; ?>>Nelayan</option>
                                <option value="Petani" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "Petani") echo "selected"; ?>>Petani</option>
                                <option value="Peternak" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "Peternak") echo "selected"; ?>>Peternak</option>
                                <option value="PNS/TNI/POLRI" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "PNS/TNI/POLRI") echo "selected"; ?>>PNS/TNI/POLRI</option>
                                <option value="KaryawanSwasta" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "KaryawanSwasta") echo "selected"; ?>>Karyawan Swasta</option>
                                <option value="Wiraswasta" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                                <option value="Buruh" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "Buruh") echo "selected"; ?>>Buruh</option>
                                <option value="Pedagang" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "Pedagang") echo "selected"; ?>>Pedagang</option>
                                <option value="Lainnya" <?php if (isset($pekerjaan_ayah) && $pekerjaan_ayah == "Lainnya") echo "selected"; ?>>Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div><br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <br><label>Penghasilan Bulanan</label>
                        </div>
                        <div class="col-md-9">
                            <br><select name="penghasilanBulanan" class="col-md-12">
                                <option value=""></option>
                                <option value="1" <?php if (isset($penghasilan_ayah) && $penghasilan_ayah == "1") echo "selected"; ?>>Kurang dari 500.000</option>
                                <option value="2" <?php if (isset($penghasilan_ayah) && $penghasilan_ayah == "2") echo "selected"; ?>>500.000 - 999.999</option>
                                <option value="3" <?php if (isset($penghasilan_ayah) && $penghasilan_ayah == "3") echo "selected"; ?>>1 Juta - 1.999.999/pete-pete</option>
                                <option value="4" <?php if (isset($penghasilan_ayah) && $penghasilan_ayah == "4") echo "selected"; ?>>2 Juta - 2.999.999</option>
                                <option value="5" <?php if (isset($penghasilan_ayah) && $penghasilan_ayah == "5") echo "selected"; ?>>5 Juta - 10 Juta</option>
                                <option value="6" <?php if (isset($penghasilan_ayah) && $penghasilan_ayah == "6") echo "selected"; ?>>Lebih dari 20 Juta</option>
                                <option value="Lainnya" <?php if (isset($penghasilan_ayah) && $penghasilan_ayah == "Lainnya") echo "selected"; ?>>Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div><br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <br><label>Berkebutuhan Khusus</label>
                        </div>
                        <br>
                        <div class="col-md-9">
                            <br><select name="tuna" class="col-md-12">
                                <option value=""></option>
                                <option value="Tidak" <?php if (isset($berkebutuhan_khusus_) && $berkebutuhan_khusus == "Tidak") echo "selected"; ?>>Tidak</option>
                                <option value="Netra" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Netra") echo "selected"; ?>>Netra</option>
                                <option value="Grahita" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Grahita") echo "selected"; ?>>Grahita</option>
                                <option value="Daksa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Daksa") echo "selected"; ?>>Daksa</option>
                                <option value="Laras" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Laras") echo "selected"; ?>>Laras</option>
                                <option value="Wicara" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Wicara") echo "selected"; ?>>Wicara</option>
                                <option value="TunaGanda" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "TunaGanda") echo "selected"; ?>>Tuna Ganda</option>
                                <option value="Hiperaktif" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                                <option value="CerdasIstimewa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "CerdasIstimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                                <option value="BakatIstimewa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "BakatIstimewa") echo "selected"; ?>>Bakat Istimewa</option>
                                <option value="KesulitanBelajar" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "KesulitanBelajar") echo "selected"; ?>>Kesulitan Belajar</option>
                                <option value="Narkoba" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Narkoba") echo "selected"; ?>>Narkoba</option>
                                <option value="indigo" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Indigo") echo "selected"; ?>>Indigo</option>
                                <option value="DownSyndrome" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "DownSyndrome") echo "selected"; ?>>Down Syndrome</option>
                                <option value="Autis" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Autis") echo "selected"; ?>>Autis</option>
                                <option value="Lainnya" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Lainnya") echo "selected"; ?>></option>
                            </select>
                        </div>
                    </div>
                </div><br>

                <!-- DATA IBU KANDUNG -->
                <div class="container">
                    <h3 class="alert alert-primary text-left mt-3">Data Ibu Kandung</h3><br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <br><label>Nama Ibu Kandung</label>
                            </div>
                            <div class="col-md-9">
                                <br><input type="text" class="form-control" placeholder="Masukkan Nama Ibu Kandung Anda">
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <br><label>Tahun Lahir</label>
                            </div>
                            <div class="col-md-9">
                                <br><input type="text" class="form-control" placeholder="Masukkan Tahun Lahir">
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <br><label>Pendidikan</label>
                            </div>
                            <div class="col-md-9">
                                <br><select name="pendidikan" class="col-md-12">
                                    <option value=""></option>
                                    <option value="TidakSekolah" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "TidakSekolah") echo "selected"; ?>>Tidak Sekolah</option>
                                    <option value="PutusSD" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "PutusSD") echo "selected"; ?>>Putus SD</option>
                                    <option value="SD" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "SD") echo "selected"; ?>>SD Sederajat</option>
                                    <option value="SMP" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "SMP") echo "selected"; ?>>SMP Sederajat</option>
                                    <option value="SMA" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "SMA") echo "selected"; ?>>SMA Sederajat</option>
                                    <option value="D1/D2/D3" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "D1/D2/D3") echo "selected"; ?>>D1/D2/D3</option>
                                    <option value="S1" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "S1") echo "selected"; ?>>S1</option>
                                    <option value="S2" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "S2") echo "selected"; ?>>S2</option>
                                    <option value="Lainnya" <?php if (isset($pendidikan_ibu) && $pendidikan_ibu == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <br><label>Pekerjaan</label>
                            </div>
                            <div class="col-md-9">
                                <br><select name="pekerjaan" class="col-md-12">
                                    <option value=""></option>
                                    <option value="TidakBekerja" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "TidakBekerja") echo "selected"; ?>>Tidak Bekerja</option>
                                    <option value="Nelayan" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "Nelayan") echo "selected"; ?>>Nelayan</option>
                                    <option value="Petani" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "Petani") echo "selected"; ?>>Petani</option>
                                    <option value="Peternak" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "Peternak") echo "selected"; ?>>Peternak</option>
                                    <option value="PNS/TNI/POLRI" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "PNS/TNI/POLRI") echo "selected"; ?>>PNS/TNI/POLRI</option>
                                    <option value="KaryawanSwasta" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "KaryawanSwasta") echo "selected"; ?>>Karyawan Swasta</option>
                                    <option value="Wiraswasta" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                                    <option value="Buruh" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "Buruh") echo "selected"; ?>>Buruh</option>
                                    <option value="Pedagang" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "Pedagang") echo "selected"; ?>>Pedagang</option>
                                    <option value="Lainnya" <?php if (isset($pekerjaan_ibu) && $pekerjaan_ibu == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <br><label>Penghasilan Bulanan</label>
                            </div>
                            <div class="col-md-9">
                                <br><select name="penghasilanBulanan" class="col-md-12">
                                    <option value=""></option>
                                    <option value="1" <?php if (isset($penghasilan_ibu) && $penghasilan_ibu == "1") echo "selected"; ?>>Kurang dari 500.000</option>
                                    <option value="2" <?php if (isset($penghasilan_ibu) && $penghasilan_ibu == "2") echo "selected"; ?>>500.000 - 999.999</option>
                                    <option value="3" <?php if (isset($penghasilan_ibu) && $penghasilan_ibu == "3") echo "selected"; ?>>1 Juta - 1.999.999/pete-pete</option>
                                    <option value="4" <?php if (isset($penghasilan_ibu) && $penghasilan_ibu == "4") echo "selected"; ?>>2 Juta - 2.999.999</option>
                                    <option value="5" <?php if (isset($penghasilan_ibu) && $penghasilan_ibu == "5") echo "selected"; ?>>5 Juta - 10 Juta</option>
                                    <option value="6" <?php if (isset($penghasilan_ibu) && $penghasilan_ibu == "6") echo "selected"; ?>>Lebih dari 20 Juta</option>
                                    <option value="Lainnya" <?php if (isset($penghasilan_ibu) && $penghasilan_ibu == "Lainnya") echo "selected"; ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <br><label>Berkebutuhan Khusus</label>
                            </div>
                            <br>
                            <div class="col-md-9">
                                <br><select name="tuna" class="col-md-12">
                                    <option value=""></option>
                                    <option value="Tidak" <?php if (isset($berkebutuhan_khusus_) && $berkebutuhan_khusus == "Tidak") echo "selected"; ?>>Tidak</option>
                                    <option value="Netra" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Netra") echo "selected"; ?>>Netra</option>
                                    <option value="Grahita" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Grahita") echo "selected"; ?>>Grahita</option>
                                    <option value="Daksa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Daksa") echo "selected"; ?>>Daksa</option>
                                    <option value="Laras" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Laras") echo "selected"; ?>>Laras</option>
                                    <option value="Wicara" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Wicara") echo "selected"; ?>>Wicara</option>
                                    <option value="TunaGanda" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "TunaGanda") echo "selected"; ?>>Tuna Ganda</option>
                                    <option value="Hiperaktif" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                                    <option value="CerdasIstimewa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "CerdasIstimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                                    <option value="BakatIstimewa" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "BakatIstimewa") echo "selected"; ?>>Bakat Istimewa</option>
                                    <option value="KesulitanBelajar" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "KesulitanBelajar") echo "selected"; ?>>Kesulitan Belajar</option>
                                    <option value="Narkoba" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Narkoba") echo "selected"; ?>>Narkoba</option>
                                    <option value="indigo" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Indigo") echo "selected"; ?>>Indigo</option>
                                    <option value="DownSyndrome" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "DownSyndrome") echo "selected"; ?>>Down Syndrome</option>
                                    <option value="Autis" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Autis") echo "selected"; ?>>Autis</option>
                                    <option value="Lainnya" <?php if (isset($berkebutuhan_khusus) && $berkebutuhan_khusus == "Lainnya") echo "selected"; ?>></option>
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <!--Tombol Submit atau Reset-->
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                    </form>
                </div><br><br><br><br>

                <?php
                //Menampilkan hasil
                echo "<center><h2>Data yang Anda Masukkan:</h2></center>";
                echo "Jenis Pendaftaran= " . $jenis_pendaftaran;
                echo "<br>";
                echo "Tanggal Masuk Sekolah= " . $tanggal_masuk_sekolah;
                echo "<br>";
                echo "NIS= " . $nis;
                echo "<br>";
                echo "Nomer Peserta Ujian= " . $nomor_peserta_ujian;
                echo "<br>";
                echo "Pernah PAUD= " . $pernah_paud;
                echo "<br>";
                echo "Pernah TK= " . $pernah_tk;
                echo "<br>";
                echo "No. Seri SKHUN Sebelumnya= " . $skhun;
                echo "<br>";
                echo "No. Seri Ijazah Sebelumnya= " . $ijazah;
                echo "<br>";
                echo "Hobi= " . $hobi;
                echo "<br>";
                echo "Cita-cita= ", $citacita;
                echo "<br>";
                echo "Nama Lengkap= " . $nama;
                echo "<br>";
                echo "Jenis Kelamin= " . $jenis_kelamin;
                echo "<br>";
                echo "NISN= " . $nisn;
                echo "<br>";
                echo "NIK= " . $nik;
                echo "<br>";
                echo "Tempat Lahir= " . $tempat_lahir;
                echo "<br>";
                echo "Tanggal Lahir= " . $tanggal_lahir;
                echo "<br>";
                echo "Agama= " . $agama;
                echo "<br>";
                echo "Berkebutuhan Khusus= " . $berkebutuhan_khusus;
                echo "<br>";
                echo "Alamat Jalan= " . $alamat;
                echo "<br>";
                echo "RT= " . $rt;
                echo "<br>";
                echo "RW= " . $rw;
                echo "<br>";
                echo "Dusun= " . $dusun;
                echo "<br>";
                echo "Desa/Kelurahan= " . $desa;
                echo "<br>";
                echo "Kecamatan= " . $kecamatan;
                echo "<br>";
                echo "Kode Pos= " . $kode_pos;
                echo "<br>";
                echo "Tempat Tinggal= " . $tempat_tinggal;
                echo "<br>";
                echo "Transportasi= " . $transportasi;
                echo "<br>";
                echo "No. HP= " . $hp;
                echo "<br>";
                echo "E-mail Pribadi= " . $email;
                echo "<br>";
                echo "No. Telepon= " . $telp;
                echo "<br>";
                echo "Penerima KPS/PKH/KIP= " . $penerima_kps;
                echo "<br>";
                echo "Nomor KPS/KKS/PKH/KIP= " . $no_kps;
                echo "<br>";
                echo "Kewarganegaraan= " . $kewarganegaraan;
                echo "<br>";
                echo "Nama Negara= " . $nama_negara;
                echo "<br>";
                echo "<br>";

                //Menampilkan pesan sukses jika berhasil menyimpan data
                echo $pesan_sukses;
                ?>
                <button onclick="location.href='cetakdataexcel.php';" id="cetakdataexcel" class="btn btn-danger"> Cetak Data Ini </button>

                <!-- Button Cetak PDF-->
                <button onclick="location.href = 'cetakpdf.php';" id="cetakpdf" class="btn btn-success"> Cetak File PDF </button>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>