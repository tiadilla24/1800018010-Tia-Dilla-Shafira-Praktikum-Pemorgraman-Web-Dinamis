<?php
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jkel = $_POST['jkel'];
 $alamat = $_POST['alamat'];
 $tgllhr = $_POST['tgllhr'];
 $asal_sekolah = $_POST['asal_sekolah'];
 // include database connection file
 include_once("koneksi.php");
 // Insert user data into table
 $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr,asal_sekolah) 
VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr','$asal_sekolah')");
// Show message when user added
 echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>
</body>
</html>