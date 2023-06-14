<html lang="en" data-theme="light">
<head>
    <title>Edit data {{ $user->name }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
        <div class="w-screen h-screen flex flex-row justify-center">
            <div class="flex flex-col gap-8 p-4 border-slate-500 rounded-md">
            <div class="flex flex-col">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a href="{{ route('index') }}">User</a></li>
                        <li>Create</li>
                    </ul>
                </div>
                <h1 class="text-4xl font-semi-bold">Edit data {{ $user->name }}</h1>
            </div>
            <form action="{{ route('update',$user->id) }}"
                method="POST"
                class="flex flex-col gap-4">
                @csrf
                @method('PUT')
                <input type="text"
                        name="name"
                        value="{{ $user->name }}"
                        placeholder="Email"
                        class="input input-bordered w-full max-w-xs" />
                <input type="email"
                        name="email"
                        value="{{$user->email}}"
                        placeholder="Password"
                        class="input input-bordered w-full max-w-xs">
                <button type="submit" class="btn btn-primary hover:cursor-pointer">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
