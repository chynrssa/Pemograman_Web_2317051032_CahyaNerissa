<?php include "koneksi/db.php"; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Tambah Mahasiswa</title> 
</head> 
<body class="container mt-5"> 
<h2>Tambah Data Mahasiswa</h2> 
    <form method="POST"> 
        <div> 
            <label>id_mahasiswa</label> 
            <input type="text" name="nama" class="form-control" required> 
        </div> 

        <div> 
            <label>nama_mahasiswa</label> 
            <input type="text" name="nama_mahasiswa" class="form-control" required> 
        </div>

        <div>
            <label> angkatan </label>
            <input type = "text" name="angkatan" class ="form-control" required>
        </div>

        <div>
            <label> jurusan </label>
            <input type = "text" name="jurusan" class ="form-control" required>
        </div>

        <div>
            <label> fakultas </label>
            <input type = "text" name="fakultas" class ="form-control" required>
        </div>

    <button type="submit" name="simpan" class="btn btn success">Simpan</button> 
    <a href="index.php" class="btn btn-secondary">Kembali</a> 
    </form> 
</body> 
</html>