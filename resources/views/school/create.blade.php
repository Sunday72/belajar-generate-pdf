<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Generate PDF | Add School</title>
</head>
<body>
    <a href="javascript:history.back()">kembali</a>
    <br><br><br>
    <form action="{{route('school.store')}}" method="post">
        @csrf
        <input type="text" name="nama_sekolah" placeholder="Nama Sekolah"><br>
        <input type="text" name="jurusan" placeholder="Jurusan"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>