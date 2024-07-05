<!DOCTYPE html>
<html>
<head>
    <title>Output Data Ruang</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Ruang</h1>
    <table>
        <tr>
            <th>Gedung</th>
            <th>Lantai</th>
            <th>Kode Ruang</th>
            <th>Nama Ruang</th>
            <th>Kapasitas Lajur</th>
            <th>Keterangan</th>
        </tr>
        <?php
        // Fungsi untuk escape input
        function escape_input($data) {
            return htmlspecialchars(trim($data));
        }

        // Inisialisasi data ruang
        $ruang_data = [];

        // Jika form disubmit, proses data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $nama_gedung = escape_input($_POST['nama_gedung']);
            $nama_lantai = escape_input($_POST['nama_lantai']);
            $kode_ruang = escape_input($_POST['kode_ruang']);
            $nama_ruang = escape_input($_POST['nama_ruang']);
            $kapasitas_lajur = escape_input($_POST['kapasitas_lajur']);
            $keterangan = escape_input($_POST['keterangan']);

            // Simpan data ruang ke dalam array
            $ruang_data[] = [
                'gedung' => $nama_gedung,
                'lantai' => $nama_lantai,
                'kode' => $kode_ruang,
                'nama' => $nama_ruang,
                'kapasitas' => $kapasitas_lajur,
                'keterangan' => $keterangan
            ];
        }

        // Tampilkan data ruang
        foreach ($ruang_data as $ruang) {
            echo "<tr>";
            echo "<td>" . $ruang['gedung'] . "</td>";
            echo "<td>" . $ruang['lantai'] . "</td>";
            echo "<td>" . $ruang['kode'] . "</td>";
            echo "<td>" . $ruang['nama'] . "</td>";
            echo "<td>" . $ruang['kapasitas'] . "</td>";
            echo "<td>" . $ruang['keterangan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>