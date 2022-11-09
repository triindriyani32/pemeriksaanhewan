<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:hewan.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_pemeriksaan WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$db_yani3nov = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data Tidak Ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1> From edit </h1>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $db_yani3nov['id']?>" />
            <p>
                <label name="nama_pemilik">Nama Pemilik : </label>
                <input type="text" name="nama_pemilik" value="<?php echo $db_yani3nov['nama_pemilik']?>" />
            </p>
            <p>
                <label for="jenis_hewan">Jenis Hewan : </label>
                <select name="jenis_hewan" value="<?php echo $db_yani3nov['jenis_hewan']?>" >
                <option value="kucing"> Kucing :</option>
                <option value="anjing"> anjing :</option>
                <option value="ular"> ular :</option>
           </select>
            </p>
            <p>
                <label for="keluhan"> Keluhan:</label>
                <input type="text" name="keluhan" value="<?php echo $db_yani3nov['keluhan']?>" />
            </p>
            <p>
                <input type="submit" name="edit" value="edit">
</p>
</fieldset>
</body>
</html>