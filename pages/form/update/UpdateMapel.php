<?php
include "../../../partials/functions.php";
include "../../../partials/koneksi.php";
directToLogin();

$id = $_GET["id"];
$query = mysql_query("SELECT * FROM pelajaran WHERE id_pelajaran='$id'");
$data = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perbarui Mata Pelajaran</title>
    <link rel="stylesheet" href="<?php echo siteUrl('css/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo siteUrl('css/style.css'); ?>">
</head>
<body>

<nav>
    <?php include("../../../partials/nav/menu.php"); ?>
</nav>


<section id="main">
    <?php include "../../../partials/header.php"; ?>

    <div id="content">
        <form action="ProsesUpdateMapel.php?id=<?php echo $data['id_pelajaran']; ?>" method="POST">
            <div id="form-tambah">
                <div class="row">
                    <div class="col-100">
                        <label>ID Pelajaran</label>
                        <input type="text" name="id_pelajaran" value="<?php echo $data['id_pelajaran']; ?>" placeholder="ID Pelajaran" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <label>Nama Pelajaran</label>
                        <input type="text" name="nama_pelajaran" value="<?php echo $data['nama_pelajaran']; ?>" placeholder="Nama Mata Pelajaran" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <label>Kelas</label>
                        <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" placeholder="Kelas" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-100">
                        <label>ID Guru</label>
                        <input type="text" name="id_guru" value="<?php echo $data['id_guru']; ?>" placeholder="ID Guru" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-100" align="right">
                        <button class="btn-tambah" type="submit">PERBARUI <span><i class="icon ion-android-add"></i></span></button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>

</body>
</html>