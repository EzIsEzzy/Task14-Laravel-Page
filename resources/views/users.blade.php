<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Users</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <h1>User Information Table</h1>
    <table border="1" style="text-align: center">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified at</th>
        </thead>
        <tbody>
            @foreach ($Allusers as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
