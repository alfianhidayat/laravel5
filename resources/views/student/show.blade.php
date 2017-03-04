<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
        NIM : <input type="text" name="nim" disabled value="{{ $mhs->nim }}">
        Nama : <input type="text" name="nama" disabled value="{{ $mhs->nama }}">
        Email : <input type="text" name="email" disabled value="{{ $mhs->email }}">
        Kelas : <input type="text" name="kelas" disabled value="{{ $mhs->kelas->kelas }}">
</body>
</html>