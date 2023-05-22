<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan
$nama           = $_POST['nama'];
$email            = $_POST['email'];
$npm            = $_POST['npm'];
$prodi        = $_POST['prodi'];
$alamat       = $_POST['alamat'];
$jeniskelamin      = $_POST['jeniskelamin'];
$nik      = $_POST['nik'];


//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if(  $nama=="" || $email=="" || $npm=="" || $prodi ==""  || $alamat=="" || $nik=="" ||$jeniskelamin  =="")
{
    ?>
    <script language="javascript">
        alert('Masih ada data yang kosong');
        document.location.href="regis.php";
    </script>
    <?php
}
//input ke tabel db
else
{ //query simpan ke db
    $sql="INSERT INTO akun VALUES (null,'$nama','$prodi','$email','$alamat','$nik','$jeniskelamin','$npm')";

    if($koneksi->query($sql) === false) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="lihatmurid.php";
        </script>
        <?php
    }
}?> <!--tutup php--->