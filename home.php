<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Siswa Baru | SMKN 1 SAYUNG</title>
    </head>

    <body>
        <header>
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMKN 1 SAYUNG</h1>
        </header>

        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-siswa.php">pendaftaran</a></li>
            </ul>
        </nav>

   
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
               echo "Pendaftaran siswa baru berhasil";
            } else {
                 echo "pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

    <br/>

    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <h4>selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

    <br/>
    <br/>

    <a href="logout.php">LOGOUT</a>



    </body>
</html>
