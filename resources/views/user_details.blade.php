<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>اطلاعات کامل کاربر</title>
    <link rel="stylesheet" href="/css/custom.css">

</head>
<body>
    <div class="container">
        <h2>اطلاعات کامل کاربر</h2>
        <table>
            <tr>
                <th>فیلد</th>
                <th>مقدار</th>
            </tr>
            <tr>
                <td>نام</td>
                <td>{{ $user->name }}</td>
                <td>
            </tr>
            <tr>
                <td>نام خانوادگی</td>
                <td>{{ $user->family_name }}</td>
            </tr>
            <tr>
                <td>نام پدر</td>
                <td>{{ $user->father_name }}</td>
            </tr>
            <tr>
                <td>کد ملی</td>
                <td>{{ $user->nat_id }}</td>
            </tr>
            <tr>
                <td>محل تولد</td>
                <td>{{ $user->birth_place }}</td>
            </tr>
            <tr>
                <td>روز تولد</td>
                <td>{{ $user->day }}</td>
            </tr>
            <tr>
                <td>ماه تولد</td>
                <td>{{ $user->month }}</td>
            </tr>
            <tr>
                <td>سال تولد</td>
                <td>{{ $user->year }}</td>
            </tr>
                <td>
                    <button><a href="{{ route('user.edit', ['user' => $user->id]) }}" class="edit-button">ویرایش</a></button>
                </td>
                <td>
                    <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">حذف</button>
                    </form>
                </td>

        </table>

        <a href="/">بازگشت به صفحه اصلی</a>
    </div>
</body>
</html>
