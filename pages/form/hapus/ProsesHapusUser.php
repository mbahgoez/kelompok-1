<?php
/**
 * Created by PhpStorm.
 * User: Bagus
 * Date: 24/05/2016
 * Time: 18:00
 */

include "../../../partials/koneksi.php";

$user = $_GET["user"];

$query = mysql_query("DELETE FROM user WHERE user_name='$user'");

if($query){
    ?>
    <script>
        alert("Penghapusan user \"<?php echo $user ?>\" berhasil dilakukan!");
        location.href = "http://localhost/design-adm/";
    </script>
    <?php
}