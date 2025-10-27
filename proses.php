<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Terkirim</title>
</head>
<body>
    <h1>Terima Kasih Telah Mendaftar!</h1>
    
    <?php
        if (isset($_POST['nama_user']) && isset($_POST['alamat_user'])) {
            $nama = $_POST['nama_user'];
            $alamat = $_POST['alamat_user'];
            $tanggal_lahir = $_POST['tglLahir_user'];
            $jenis_kelamin = $_POST['kelamin_user'];
            
            echo "<p>Halo, <strong>" . htmlspecialchars($nama) . "</strong>!</p>";
            echo "<p>Data Anda telah berhasil kami terima.</p>";
            echo "<p><strong>Jenis Kelamin:</strong> " . htmlspecialchars($jenis_kelamin) . "</p>";
            echo "<p><strong>Tanggal Lahir:</strong> " . htmlspecialchars($tanggal_lahir) . "</p>";
            echo "<p><strong>Alamat:</strong> " . htmlspecialchars($alamat) . "</p>";
        } else {
            echo "<p>Maaf, terjadi kesalahan. Pastikan semua data telah diisi dengan lengkap.</p>";
        }
    ?>

    <a href="form.html">Kembali ke Formulir</a>
</body>
</html>