<!DOCTYPE html>
<html>

<head>
    <title>Tutor-Q</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script> -->
    <script src="scripts/daypilot-all.min.js" type="text/javascript"></script>

</head>
<?php session_start();?>

<body class="body-admin">
    <div class="row">
        <div class="sidebar col-md-2">
            <div class="col-md-12">
                <img <?php error_reporting(0); echo $foto = $_SESSION['foto']; ?> style="padding:15px 0 20px">
            </div>
            <ul class="nav flex-column nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Jadwal Tutor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil Tutor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Absensi Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Upload Nilai Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kurikulum Pengajar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Materi Pembelajaran</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Histori Pembelajaran</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pengaturan</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10" style="padding:0">
            <header class="header-admin">
                <div class="head-left">
                    <form class="form-inline my-2 my-lg-0">
                        <input class=" mr-sm-2 searchbox-admin" type="search" placeholder="Cari apa?"
                            aria-label="Search">
                        <button class="btn searchbox-admin my-2 my-sm-0" type="submit"><i
                                class="font-color fas fa-search" style="color: #4A4A4A;"></i></button>
                    </form>
                </div>
                <div class="head-right">
                    <div class="row" style="margin: auto 10px">
                        <p style="color:black;margin:auto 15px;">
                            <?php error_reporting(0);                
                                $nama = $_SESSION['nama'];
                                 if($nama){
                                echo "Halo, ".$nama;
                                }    
                                 ?>
                        </p>
                        <?php 
                error_reporting(0);                
                $stat = $_SESSION['status'];
                if($stat=='login'){
                $logout = 'Logout';
                $address = 'logout.php';
                }else{
                $logout = 'Login';
                $address = 'login.html';
                }
                ?>
                        <form action="<?php echo $address ?>">
                            <input class="btn btn-outline-dark my-2 my-sm-0" type="submit"
                                value="<?php echo $logout ?>">
                        </form>
                    </div>
                </div>
            </header>
            <article>
                <div class="col-md-11 content-box ">
                    <h2 style="text-align:center"><b>Jadwal Tutor</b></h2>
                    <p style="text-align:center">Pastikan anda mengajar sesuai dengan jadwal yang telah ditentukan. Kejadian diluar
                        ketentuan akan ditanggung oleh tutor masing-masing!
                    </p>
                    <!-- <div id="dp" class="col-md-12"></div> JANGAN DIBUKA!!!-->
                    <!-- Bikin tabel baris jam (06.00-17.00 satu baris 2jam) kolom hari (senin-minggu) -->
                    <div class="table-responsive-xl">
                        <table class="table">
                         <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script type="text/javascript">
                    var dp = new DayPilot.Calendar("dp");
                    dp.viewType = "Week";
                    dp.init();
                </script>


            </article>
        </div>
    </div>
</body>

</html>