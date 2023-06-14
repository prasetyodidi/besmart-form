<html lang="en">
<head>
    <title>Create data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full flex flex-row h-screen p-4">
        <div class="w-1/2 text-white rounded-md p-8 bg-[url('/sea.jpg')] bg-cover">
            <a href="{{ route('index') }}" class="flex flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                <span>Back</span>
            </a>
            <span class="text-2xl font-bold text-white">
                Besmart Tanggal 25 Mei 2023
            </span>
            {{-- <img src="/sea.jpg" alt="background" class="w-1/2 mx-auto"> --}}
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
                    <input type="password" name="password" placeholder="Password"
                           class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300
                                  rounded-md text-sm shadow-sm placeholder-slate-400
                                  focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                                  disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200">
                </label>
                <br>
                <button type="submit" class="w-full py-3 rounded-md bg-blue-500 text-xl text-white">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
