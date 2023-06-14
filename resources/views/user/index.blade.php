<html lang="en">
<head>
    <title>Data User</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="w-screen h-screen flex flex-row justify-center">
        <div class="flex flex-col gap-8 w-3/4 mt-10">
            <div class="flex flex-row justify-between">
                <h1 class="text-4xl font-semi-bold">Daftar User</h1>
                <a href="{{ route('create') }}" class="btn btn-primary">Create</a>
            </div>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="flex flex-row gap-2">
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
