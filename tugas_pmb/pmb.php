<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        footer {
            background-image: url(https://www.upj.ac.id/web/templates/assets/images/logo-footer.png);
            background-repeat: no-repeat; 
            background-size: 17%;
            background-position: 1050px 70px;
        }
    </style>
    <title>UPJ</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark py-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center " id="navbarNavDropdown">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active text-white" href="#sejarah">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active text-white" href="#" role="button" data-bs-toggle="dropdown">
                                    Fakultas
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="informatika_upj.html">Prodi Informatika</a></li>
                                        <li><a class="dropdown-item" href="akuntansi_upj.html">Prodi Akuntansi</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active text-white" href="#contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" href="pendaftaran_upj.html">Pendaftaran</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="p-10 bg-secondary">
        <div class="container">
            <div class="row mt-0">
                <div class="col-md-12 rounded bg-white p-5 mt-5">

                <form method="post" action="konfirmasipmb.php">            
                    <h5 class="mt-5 bg-dark p-2 text-white">Jalur Pendaftaran</h5>
                    <div class="form-group mt-5">
                        <select class="form-select" name="jalur_pendaftaran" required>
                            <option>PMB - Reguler Rapor</option>
                            <option>PMB - Reguler Peringkat Kelas</option>
                            <option>PMB - Reguler Ujian Saringan Masuk</option>
                        </select>
                    </div>
                    <h5 class="mt-5 bg-dark p-2 text-white">Identitas Diri</h5>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="first">Nama Lengkap*</label>
                            <input type="text" class="form-control form-control-sm" placeholder="" id="first" name="nama" required>
                            </div>
                        </div>

                        <div class="col-md-6">   
                            <div class="form-group">
                                <label>Jenis Kelamin*</label>                               
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki
                                    </label>
                                    
                                    <label class="ms-1">
                                        <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nohp">No. HP*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="nohp" name="no_hp" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Alamat Email*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="email" name="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="tgl_lahir">Tanggal Lahir*</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                <input type="date" class="form-control form-control-sm" placeholder="" id="tgl_lahir" name="tgl_lahir" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="kewarganegaraan" name="kewarganegaraan" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK/No. KTP*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="nik" name="nik" required>
                            </div>
                        </div>
                    </div>

                    
                    <h5 class="mt-5 bg-dark p-2 text-white">Asal Sekolah</h5>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="provinsi">Tahun Lulus*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="provinsi" name="tahun_lulus" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="npsn">NPSN*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="" id="npsn" name="npsn" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="jurusan">Jurusan Sekolah*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" id="jurusan" name="jurusan" required>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-5 bg-dark p-2 text-white">Pilih Program Studi yang Diinginkan</h5>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="prodi" required>
                                    <option selected="true" disabled="disabled">Pilih Program Studi</option>
                                    <option>Manajemen</option>
                                    <option>Psikologi</option>
                                    <option>Akuntansi</option>
                                    <option>Ilmu Komunikasi</option>
                                    <option>Informatika</option>
                                    <option>Sistem Informasi</option>
                                    <option>Desain Komunikasi Visual</option>
                                    <option>Desain Produk</option>
                                    <option>Teknik Sipil</option>
                                    <option>Arsitektur</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-5">Submit</button>
                </form>


            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>