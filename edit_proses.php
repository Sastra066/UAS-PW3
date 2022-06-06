<?php

if(isset($_POST['simpan']))
{
    include('koneksi.php');
    $soal       = $_POST['soal'];
    $pilihanA   = $_POST['pilihanA'];
    $pilihanB   = $_POST['pilihanB'];
    $pilihanC   = $_POST['pilihanC'];
    $pilihanD   = $_POST['pilihanD'];
    $jawabanbenar=$_POST['jawabanbenar'];
    $update     = mysqli_query($koneksi, "update quiz set
    pilihanA    = '$pilihanA',
    pilihanB    = '$pilihanB',
    pilihanC    = '$pilihanC',
    pilihanD    = '$pilihanD',
    jawabanbenar= '$jawabanbenar'
    where soal ='$soal'")
    or die(mysqli_error());

    if($update){
        echo "<script>alert('Soal berhasil diedit');document.location.href='saransoal.php'</script>";
    }
    else{
        echo "<script>alert('Soal gagal diedit');document.location.href='edit.php'</script>";
    }
}
else{
    echo "<script>window.history.back()</script>";
}
?>
