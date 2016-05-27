<?php
include "../../../partials/functions.php";
include "../../../partials/koneksi.php";
directToLogin();
$id = $_GET['id'];

$query = mysql_query("SELECT * FROM guru WHERE id_guru='$id'");
$data = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perbarui Guru</title>
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
        <form action="ProsesUpdateGuru.php?id=<?php echo $data['id_guru']; ?>" method="post">
            <div id="form-tambah">
                <div class="row">
                    <div class="col-33">
                        <label>ID Guru</label>
                        <input type="text" name="id_guru" value="<?php echo $data['id_guru']; ?>" placeholder="ID Guru" required>
                    </div>
                    <div class="col-66">
                        <label>Nama Guru</label>
                        <input type="text" name="nama_guru" value="<?php echo $data['nama_guru']; ?>" placeholder="Please Enter Fullname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <label>Jenis Kelamin</label>
                        <label class="radio">
                            <input type="radio" name="jk" value="L" <?php if($data['jk'] == 'L'){echo "checked";} ?> required>Laki - laki
                        </label>
                        <label class="radio">
                            <input type="radio" name="jk" value="P" <?php if($data['jk'] == 'P'){echo "checked";} ?> required>Perempuan
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-100">
                        <label>Alamat</label>
                        <textarea name="alamat" cols="88" rows="10" required><?php echo $data['alamat']; ?></textarea>
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