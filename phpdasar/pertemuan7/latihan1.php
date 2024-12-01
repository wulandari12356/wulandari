<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "wulan",
    "nrp" => "082431254",
    "email" => "wulandari12345@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "wulan.img"
    ],
    [
        "nama" => "adzando",
        "nrp" => "027143267",
        "email" => "adzandi123@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "adzando.img"
        ]
]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>