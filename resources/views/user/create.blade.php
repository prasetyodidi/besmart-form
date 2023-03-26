<html lang="en">
<head>
    <title>Create data</title>
</head>
<body>
    <a href="{{ route('index') }}">Back</a>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
