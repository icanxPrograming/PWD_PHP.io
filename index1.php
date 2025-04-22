<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelipatan 3 dan 5</title>
    <style>
        .content {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    include("data.php");
    ?>
    <h1 style="text-align: center;">Tugas PHP Dasar</h1>
    <hr style="width: 98%;">
    <h2 style="text-align: center;">Angka dari 1 sampai 100 (Kelipatan 3 dan 5)</h2>
    <div class="content">
        <ul>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "<li>$i</li>";
                }
            }
            ?>
        </ul>
    </div>

    <hr style="width: 98%;">

    <h2 style="text-align: center;">Tabel Array Data Mahasiswa</h2>
    <div class="content">
        <table border="1">
            <tr>
                <th>NO</th>
                <th>NPM</th>
                <th>NAMA MAHASISWA</th>
                <th>NILAI</th>
                <th>KETERANGAN</th>
            </tr>
            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) {
                $npm = $mhs["npm"];
                $nama = $mhs["nama"];
                $nilai = $mhs["nilai"];
                if ($nilai >= 60) {
                    $keterangan = "Lulus";
                } else {
                    $keterangan = "Tidak Lulus";
                }

                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$npm</td>";
                echo "<td>$nama</td>";
                echo "<td>$nilai</td>";
                echo "<td>$keterangan</td>";
                echo "</tr>";

                $no++;
            }
            ?>
        </table>
    </div>

</body>

</html>