<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="proses.php" method="post">
        <label>NIM:</label>
        <input type="text" name="nim">

        <label>Program Studi</label>
        <select name="prodi">
            <option value="Teknik Informatika S1">Teknik Informatika S1</option>
            <option value="Sistem Informasi S1">Sistem Informasi S1</option>
            <option value="Teknik Informatika D3">Teknik Informatika D3</option>
        </select>

        <label>Nilai Tugas:</label>
        <input type="text" name="nilai_tugas">

        <label>Nilai UTS:</label>
        <input type="text" name="nilai_uts">

        <label>Nilai UAS:</label>
        <input type="text" name="nilai_uas">

        <label>Catatan Khusus</label>
        <div>
            <p><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
            <p><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</p>
            <p><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p>
        </div>
        <button type="submit" name="kirim">Submit</button>
    </form>
</body>

</html>