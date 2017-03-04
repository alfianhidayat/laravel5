<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="/student" method="post">
        {{ csrf_field() }}
        NIM : <input type="text" name="nim" >
        Nama : <input type="text" name="nama" >
        Email : <input type="text" name="email" >
        Kelas :
        <select name="kelas_id">
            <option value="1">SI3901</option>
            <option value="2">SI3902</option>
        </select>
        <input type="submit" value="tambah">
    </form>
</body>
</html>