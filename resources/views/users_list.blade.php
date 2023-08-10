<!DOCTYPE html>
<html>
<head>
    <title>لیست کاربران</title>
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <h1>لیست کاربران</h1>
    <table>
        <tr>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>نام پدر</th>
            <th>کد ملی</th>
            <th>محل تولد</th>
            <th>تاریخ تولد</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->family_name }}</td>
                <td>{{ $user->father_name }}</td>
                <td>{{ $user->nat_id }}</td>
                <td>{{ $user->birth_place }}</td>
                <td>{{ $user->year }}/{{ $user->month }}/{{ $user->day }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="/create" class="btn">افزودن کاربر</a>
</body>
</html>
