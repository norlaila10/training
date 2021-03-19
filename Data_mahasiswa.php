<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <label >Search:</label>

                <input type="submid" value="Cari" >
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NPM</th>
                        <th>NAMA</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th> 
                        <th>JENIS KELAMIN</th>   
                        <th>ALAMAT</th>  
                        <th>KODEPOS</th>  
                        <th>AKSI</th>
                    </tr>
                    <?php 
                        include "koneksi.php";
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        while($data=mysqli_fetch_array($tampil))
                        {
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data['npm']; ?> </td>
                        <td> <?php echo $data['nama']; ?> </td>
                        <td> <?php echo $data['tempat_lahir']; ?> </td>
                        <td> <?php echo $data['tanggal_lahir']; ?> </td>
                        <td> <?php echo $data['jenis_kelamin']; ?> </td>
                        <td> <?php echo $data['alamat']; ?> </td>
                        <td> <?php echo $data['kodepos']; ?> </td>
                        <td>
                            <a href="edit_mahasiswa.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>