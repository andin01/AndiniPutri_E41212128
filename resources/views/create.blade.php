<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>input data hewan</title>
</head>
<body>
    <form action="/create" method="post">
        @csrf
        <label for="">jenis_hewan</label><br>
        <input type="text" name="jenis_hewan"><br>
        <label for="">umur</label><br>
        <input type="text" name="umur"><br>
        <label for="">berat</label><br>
        <input type="text" name="berat"><br>
        <label for="">kesehatan_hewan</label><br>
        <input type="text" name="kesehatan"><br>

        <button type="submit">Kirim Data</button>
    </form>
</body>
</html>