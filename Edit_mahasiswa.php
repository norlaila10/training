<?php
    include "koneksi.php";
    $id = $_GET['id'];
   $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
   while($data = mysqli_fetch_array($tampil))
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UAS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>  
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                <div class="form-group">
                        <label for="id">id</label>
                        <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control col-md-9" placeholder="Masukkan id">
                    </div>

                    <div class="form-group">
                        <label for="NPM">NPM</label>
                        <input type="text" name="npm" value="<?php echo $data['npm'] ?>" class="form-control col-md-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="NAMA">Nama</label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>" class="form-control col-md-9" placeholder="Masukkan tempat_lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>" class="form-control col-md-9" placeholder="Masukkan tanggal_lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" class="form-control col-md-9" placeholder="Masukkan jenis_kelamin">
                    </div>

                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control col-md-9" placeholder="Masukkan alamat">
                    </div>

                    <div class="form-group">
                        <label for="kodepos">Kodepos</label>
                        <input type="number" name="kodepos" value="<?php echo $data['kodepos'] ?>" class="form-control col-md-9" placeholder="Masukkan kodepos">
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                    <button type="reset" class="btn btn-danger">BACA</button>
                    <button type="reset" class="btn btn-danger">PERBAHARUI</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>

<?php
        if(isset($_POST['simpan']))
        {
            $id              = $_POST['id'];
            $npm             = $_POST['npm'];
            $nama            = $_POST['nama'];
            $tempat_lahir    = $_POST['tempat_lahir'];
            $tanggal_lahir   = $_POST['tanggal_lahir'];
            $jenis_kelamin   = $_POST['jenis_kelamin'];
            $alamat          = $_POST['alamat'];
            $kodepos         = $_POST['kodepos'];

            mysqli_query($koneksi, "UPDATE mahasiswa
            SET id='$id', npm='$npm', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',kodepos='$kodepos'
            WHERE idmahasiswa='$id'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Di Update.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/NORLAILA/data_mahasiswa.php'>";
        }
?>