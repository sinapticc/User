<!DOCTYPE html>
<html>
<head>
    <title>لیست کاربران</title>
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <div class="container">
         <h1>لیست کاربران</h1>
         <table>
             <thead>
             <tr>
                 <th>نام</th>
                 <th>کد ملی</th>
             </tr>
             </thead>
             <tbody>
             @foreach ($users as $user)
                 <tr>
                     <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                     <td>{{ $user->nat_id }}</td>
                 </tr>
             @endforeach
             </tbody>
         </table>
    </div>
    <br>
    <a href="/create" class="btn">افزودن کاربر</a>
</body>
</html>
