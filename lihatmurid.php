<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    <style>
                .center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: auto;
  width: auto;
}
    </style>
    <!-- Titles-->
    <title>Registrasi Murid</title>
    
</head>

<body>
    <nav class="navbar navbar-primary">
  <form class="form-inline">
    <label for="title" class="text-light font-weight-bold">Tugas 9</label>
  </form>
</nav>
 <div class="col-md-8 col-md-offset-2 center">
        <br><br>
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="table">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NPM</th>
                                <th>Program Studi</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no=0;
                            $result = mysqli_query($koneksi, "SELECT * FROM akun ORDER BY id_akun ASC");
                            while($row = mysqli_fetch_assoc($result)) {
                                $no++
                                ?>
                                <tr class="">
                                    <td><?php echo $row['nik'];?></td>
                                    <td><?php echo $row['nama'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['npm'];?></td>
                                    <td><?php echo $row['prodi'];?></td>
                                    <td><?php echo $row['jeniskelamin'];?></td> 
                                    <td><?php echo $row['alamat'];?></td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                            <div class="panel-heading">
                <div class="alert alert-warning">
                    <a href="index.php" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Kembali</a>
                <a class="btn btn-success" href="report.php">Cetak Excel</a>
                </div>
            </div>
            </div>  
        </div>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/hapus.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>


    <!-- Footer -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>