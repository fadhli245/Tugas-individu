<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="process_form.php" method='post'>
<title>Tambah Data Ruang</title>
    
</head>
<body>
    <div class="container">
        <h2>Tambah Data Ruang</h2>
        <form>
            <div class="form-group">
                <label for="nama-gedung">Nama Gedung*</label>
                <select id="nama-gedung" name="nama-gedung" required>
                    <option value="">Pilih Gedung</option>
                    <option value="">Gedung Serbaguna</option>
                    <option value="">Gedung Perpustakan</option>
                    <option value="">Gedung Lab Komputer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama-lantai">Nama Lantai*</label>
                <select id="nama-lantai" name="nama-lantai" required>
                    <option value="">Pilih Lantai</option>
                    <option value="">Lantai 1</option>
                    <option value="">lantai 2</option>
                    <option value="">lantai 3</option>
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