<html lang="en">
<head>
    <title>Detail Data User {{ $user->name }}</title>
</head>
<body>
    <a href="{{ route('index') }}">Back</a>
    <h1>Detail Data User {{ $user->name }}</>
    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    </table>
</body>
</html>
