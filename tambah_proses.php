<?php

if(isset($_POST['tambah']))
{
    include_once 'koneksi.php';
    $soal       = $_POST['soal'];
    $pilihanA   = $_POST['pilihanA'];
    $pilihanB   = $_POST['pilihanB'];
    $pilihanC   = $_POST['pilihanC'];
    $pilihanD   = $_POST['pilihanD'];
    $jawabanbenar=$_POST['jawabanbenar'];

    $input= mysqli_query($koneksi, "insert into quiz values ('$soal', '$pilihanA', '$pilihanB', '$pilihanC', '$pilihanD', '$jawabanbenar')")
    
    or die(mysqli_error());

    if($input)
    {
        echo "<script>alert('Soal berhasil ditambahkan');document.location.href='saransoal.php'</script>";
    }
    else
    {
        echo "<script>alert('Soal gagal ditambahkan');document.location.href='tambah.php'</script>";
    }
}

?>