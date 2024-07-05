<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ruang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ff0000;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 5px;
        }
        .form-group input[type="text"] {
            height: 35px;
        }
        .form-group textarea {
            height: 80px;
        }
        .form-actions {
            text-align: right;
        }
        .form-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 10px;
        }
        .form-actions .btn-save {
            background-color: #007bff;
            color: #fff;
        }
        .form-actions .btn-close {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Ruang</h2>
        <form action="hasil_form.php" method="post">
            <div class="form-group">
                <label for="nama-gedung">Nama Gedung*</label>
                <select id="nama-gedung" name="nama-gedung" required>
                    <option value="">Pilih Gedung</option>
                    <option value="">G1</option>
                    <option value="">G2</option>
                    <option value="">G3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama-lantai">Nama Lantai*</label>
                <select id="nama-lantai" name="nama-lantai" required>
                    <option value="">Pilih Lantai</option>
                    <option value="">lan1</option>
                    <option value="">lan2</option>
                    <option value="">lan3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kode-ruang">Kode Ruang*</label>
                <input type="text" id="kode-ruang" name="kode-ruang" required>
            </div>
            <div class="form-group">
                <label for="nama-ruang">Nama Ruang*</label>
                <input type="text" id="nama-ruang" name="nama-ruang" required>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas (Lajur)*</label>
                <input type="text" id="kapasitas" name="kapasitas" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea id="keterangan" name="keterangan"></textarea>
            </div>
            <div class="form-actions">
                <button type="button" class="btn-close">Tutup</button>
                <button type="submit" class="btn-save">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
