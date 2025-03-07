<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
    $ns1 = ["id" =>1, "nim" => "0110124365", "uts" => 89, "uas" => 92, "tugas" => 79];
    $ns2 = ["id" =>2, "nim" => "0110124742", "uts" => 87, "uas" => 90, "tugas" => 76];
    $ns3 = ["id" =>3, "nim" => "0110124442", "uts" => 85, "uas" => 89, "tugas" => 87];
    $ns4 = ["id" =>4, "nim" => "0110124213", "uts" => 88, "uas" => 94, "tugas" => 85];

    $ar_nilai = [$ns1 , $ns2, $ns3, $ns4];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3 class="mt-4">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($ar_nilai as $ns) {
                        echo '<tr>';
                        echo '<td>'.$nomor.'</td>';
                        echo '<td>'.$ns['nim'].'</td>';
                        echo '<td>'.$ns['uts'].'</td>';
                        echo '<td>'.$ns['uas'].'</td>';
                        echo '<td>'.$ns['tugas'].'</td>';
                        $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                        echo '<td>'.number_format($nilai_akhir, 2, ',', '.').'</td>';
                        echo '</tr>';
                        $nomor++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>