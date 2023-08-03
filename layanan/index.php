<!DOCTYPE html>
<html lang="en">
<head>
<title>RONNELA COTTEGA | Welcome</title>
    <link rel="icon" href="../image/logo_head.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
</head>
<body style="background: url(../image/wallpaperbetter.com_1920x1080.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:700px; margin-top: 35px;">
   
    <?php include "session.php";?>
    <?php include "koneksi.php";
        $ss = mysqli_query($conn,'select * from pengunjung where username="'.$_SESSION['pengunjung'].'" ');
        $ds = mysqli_fetch_array($ss);
    ?>
  <!--header-->
<nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#" class="brand-logo"><font face="Bernard MT Condensed" >RONELLA COTTEGA</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="signout.php">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container pt-5 mt-5">
        <div class="row pt-4">
           <div class="col s12 text-center">
                <h2 class="display-3" id="layanan">Layanan</h2>
                <p><i>
                    layanan yang kami tawarkan
              </i></p>
           </div>
        <div class="row pt-4 mt-4">
          <div class="col-md-6 text-center orange-text mt-4">
            <i class="fas fa-car fa-10x"></i>
            <br>
            <br>
             <a class="nav-link card grey" href="mobil/index.php " class="card"><h1 style="color:white">Rental Mobil</h1>
		      	</a>
          </div>
          <div class="col-md-6 text-center orange-text mt-4">
            <i class="fas fa-hotel fa-10x"></i>
            <br>
            <br>
               <a class="nav-link card grey" href="hotel/index.php"><h1 style="color:white">Penginapan</h1></a>
          </div>
        </div>   
      </div>
    </div>
 </font>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
</body>
</html>