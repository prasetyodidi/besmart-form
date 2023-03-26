<html lang="en">
<head>
    <title>Edit data {{ $user->name }}</title>
</head>
<body>
    <a href="{{ route('index') }}">Back</a>
    <h1>Edit data {{ $user->name }}</h1>
    <form action="{{ route('update',$user->id) }}" method="POST" placeholder="Name">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" placeholder="Email">
        <br>
        <input type="email" name="email" value="{{$user->email}}" placeholder="Password">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
