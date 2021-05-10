<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>
<h2>Form Input</h2> 
        <form method="post" action="output.php">
            <fieldset>
                <labe>Nama : </labe>
                <input type="text" name="nama" ><br>
                <label>Tanggal lahir : </label>
                <input type="date" name="tgl_lahir"><br>
                <label>Pekerjaan : </label>
                <select id=pekerjaan name=pekerjaan>
                <option value="Developer Web">Developer Web</option>
                <option value="Designer Grafis">Designer Grafis</option>
                <option value="Data Analis">Data Analis</option>
                <option value="IT Support">IT Support</option>
                </select><br>
                <input type="submit" value=" Simpan ">
            </fieldset>
        </form>
</body>
</html>