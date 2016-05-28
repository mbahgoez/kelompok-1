<?php
/**
 * Created by PhpStorm.
 * User: Bagus
 * Date: 24/05/2016
 * Time: 17:43
 */

include "../../../partials/koneksi.php";
include "../../../partials/functions.php";


$username = $_POST["user_name"];
$nama_lengkap = $_POST["full_name"];
$password = $_POST["password"];
$repassword = $_POST["re_password"];
$bio = $_POST["bio"];


if($password !== $repassword){
    directMsg("Password tak sesuai", "pages/form/tambah/TambahUser.php?status=wrongpassword");
}
else {
   $query = mysql_query("INSERT INTO user VALUES('$username', '$password','$nama_lengkap','$bio')") or die(mysql_error());

    if($query){
         ?>
        <script>
            alert("Penambahan user \"<?php echo $username; ?>\" atas nama \"<?php echo $nama_lengkap ?>\" Berhasil");
            location.href="<?php siteUrl('#dashboard'); ?>";
        </script>
        <?php
    }
}