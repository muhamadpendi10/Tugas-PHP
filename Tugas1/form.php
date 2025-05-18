<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METODE GET</title>
</head>
<body>
    
    <form method="get">
        <label>Nama Lengkap</label><br>
        <!---Harus ada yang namanya 'name' pada input untuk menggunakan form supaya dapat kirim data--->
        <input type="text" name="fullname"><br> 

        <label>Email</label><br>
        <textarea name="email"></textarea><br>

        
        <label>Nilai</label><br>
        <textarea name="nilai"></textarea><br>

        <input type="submit" name="proses" value="Kirim">
    </form>

    <!---Menampilkan di halaman bawah dari form menggunakan script 'PHP'--->
    <?php
    /* memakai 'IF' untuk mengetahui apakah tombol sudah di klik atau belum */
     if (isset($_GET['proses'])) {

        /* Proses menampilkan data */

        $fname = $_GET['fullname'];
        $eml = $_GET['email'];
        $nli = $_GET['nilai'];
        $tombol = $_GET['proses'];

        echo "Nama: $fname <br>Email: $eml <br>Nilai: $nli <br/>";

        // Konversi nilai ke integer 
        // (int) digunakan agar string nilai bisa diproses sebagai angka.
        $nilai = $nli;

        // Struktur kendali kelulusan
        if ($nilai > 70) {
            echo "Status: Lulus<br/>";
        } else {
            echo "Status: Remedial<br/>";
        }
     }   
    ?>

</body>
</html>