<html>

<head>
    <title>Rental Mobil | Sign In</title>
   <link rel="icon" href="../image/logo_head.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body style="background: url(../image/wallpaperbetter.com_1920x1080.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height: 725px; margin-top: -35px;">
        <center>
            <div style="padding-top: 175px;">
                <a href="index.php" onclick="window.close();">
                    <img src="../image/foot_logo.png" class="img-responsive" style="width: 150x; height: 120px;">
                </a>
                <p style="font-family: Segoe Print; font-size: 21px;">Sign In dulu, untuk melakukan<b> </b> Pemesanan</p>
                <div class="container" style="width: 500px;">
                    <form method="post" action="signin_p.php">
                        <div class="input-field">
                            <input type="text" name="username" id="user">
                            <label for="user">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" id="pass">
                            <label for="pass">Password</label>
                        </div>
                        <a href="signin_p.php" style="font-family: segoe ui light;"><button class="btn waves-effect">Sign In  <i class="ion-log-in"></i></button></a>
                    </form>
                    <p class="left"><font face="Segoe Print" size="2">Anda belum punya akun? Silahkan buat akun anda.</font></p><a href="signup.php" style="font-family: segoe ui light;" class="right"><button class="btn waves-effect blue">Sign Up  <i class="ion-android-person-add"></i></button></a>
                </div>
            </div>
        </center>
    </div>
</body>

</html>
