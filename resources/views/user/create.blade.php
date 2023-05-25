<html lang="en">
<head>
    <title>Create data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full flex flex-row h-screen m-4">
        <div class="w-1/2 bg-slate-200 rounded-md">
            <a href="{{ route('index') }}" class="text-xl px-2 px-1 rounded-md bg-red-500">Back</a>
            <img src="/sea.jpg" alt="background" class="w-1/2 mx-auto">
        </div>
        <div class="w-1/2 rounded-md m-8">
            <h1 class="text-2xl font-bold">Menambahkan User</h1>
            <p class="text-slate-500 mb-4">Form untuk menambahkan user baru</p>
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <label for="name">
                    Nama
                    <input type="text" name="name" placeholder="Name"
                           class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300
                                  rounded-md text-sm shadow-sm placeholder-slate-400
                                  focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                                  disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200">
                </label>
                <br>
                <label for="email">
                    Email
                    <input type="email" name="email" placeholder="Email"
                           class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300
                                  rounded-md text-sm shadow-sm placeholder-slate-400
                                  focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                                  disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200">
                </label>
                <br>
                <label>
                    Password
                    <input type="text" name="password" placeholder="Password"
                           class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300
                                  rounded-md text-sm shadow-sm placeholder-slate-400
                                  focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                                  disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200">
                </label>
                <br>
                <button type="submit" class="px-2 py-1 rounded-md bg-blue-500">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
