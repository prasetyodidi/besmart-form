<html lang="en">
<head>
    <title>Data User</title>
</head>
<body>
    <a href="{{ route('create') }}">Create</a>
        <table>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('show',$user->id) }}">Show</a>
                    <a href="{{ route('edit',$user->id) }}">Edit</a>
                    <form action="{{ route('destroy',$user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</body>
</html>
