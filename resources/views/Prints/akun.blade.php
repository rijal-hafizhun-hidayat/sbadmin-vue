<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Dibuat</th>
            <th>Terakhir Diubah</th>
        </tr>
        </thead>
        <tbody>
        @foreach($akuns as $akun)
            <tr>
                <td>{{ $akun->name }}</td>
                <td>{{ $akun->username }}</td>
                <td>{{ $akun->created_at }}</td>
                <td>{{ $akun->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>