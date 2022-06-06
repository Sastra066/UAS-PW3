<?php
    if(isset($_GET['soal'])){
        include('koneksi.php');
        $soal       = $_GET['soal'];
        $cek    =mysqli_query($koneksi, "select soal from quiz where soal = '$soal'") or die(mysqli_error());

        if(mysqli_num_rows($cek)==0)
        {
            echo "<script>window.history.back()</script>";
        }
        else
        {
            $del = mysqli_query($koneksi, "delete from quiz where soal = '$soal'");
            if($del)
            {
                echo "<script>alert('Soal berhasil dihapus');document.location.href='saransoal.php'</script>";
            }
            else
            {
                echo "<script>alert('Soal gagal dihapus');document.location.href='saransoal.php'</script>";
            }
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>
