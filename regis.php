<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    <!-- css -->
     <style>
        .center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: auto;
  width: auto;
}
     </style>
    <title>Regis Form</title>
</head>
<body>
<nav class="navbar navbar-primary">
  <form class="form-inline">
    <label for="title" class="text-light font-weight-bold">Tugas 9</label>
  </form>
</nav>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Registrasi Sistem Informasi Akademik Fasilkom UPN Jatim
                </div>
                <div class="card-body">
                    <form method="post" action="prosesRegis.php">

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                           <input 
                            type="nik"
                            id="inputNIK"
                            placeholder="nik"
                            class="form-control mb-2"
                            name="nik"
                            required
                            autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                           <input 
                            type="email"
                            id="inputEmail"
                            placeholder="email"
                            class="form-control mb-2"
                            name="email"
                            required
                            autofocus>
                        </div>
                    </div>
                                            <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                           <input 
                            type="nama"
                            id="inputNama"
                            placeholder="nama"
                            class="form-control mb-2"
                            name="nama"
                            required
                            autofocus>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki</label>
                            <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</label> 
                        </div>
                    </div>
                        <div class="form-group row">
                        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                        <div class="col-sm-10">
                           <input 
                            type="npm"
                            id="inputNPM"
                            placeholder="npm"
                            class="form-control mb-2"
                            name="npm"
                            required
                            autofocus>
                        </div>
                    </div>
                      

                    <div class="form-group row">
                        <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <input type="radio" name="prodi" value="Informatika">Informatika</label>
                            <input type="radio" name="prodi" value="Sistem Informasi">Sistem Informasi</label> 
                            <input type="radio" name="prodi" value="Sains Data">Sains Data</label> 
                        </div>
                    </div>
                        
                          <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                              <textarea 
                              class="form-control" 
                              id="alamat" 
                              rows="3"
                              name="alamat"
                              required
                            autofocus></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Registrasi</button>
                                                 <a href="index.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>