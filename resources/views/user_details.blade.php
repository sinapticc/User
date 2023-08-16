<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>اطلاعات کامل کاربر</title>
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link href="/css/style/style.css" rel="stylesheet">
    <link href="/css/skins.css" rel="stylesheet">
    <link href="/css/dark-style.css" rel="stylesheet">
    <link href="/css/colors/default.css" rel="stylesheet">

    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/css/colors/color.css">

    <link href="/css/sidemenu/sidemenu.css" rel="stylesheet">

    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet">

    <link href="/css/sidemenu/sidemenu.css" rel="stylesheet">

</head>
<body>

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="table-responsive border">
                    <h2>اطلاعات کامل کاربر</h2>
                    <table class="table  text-nowrap text-md-nowrap table-striped mg-b-0">
                        <tr>
                            <th scope="row">فیلد</th>
                            <th scope="row">مقدار</th>
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
                            <td>استان</td>
                            <td>
                                {{ $user->userProvince->name }}
                            </td>
                        </tr>
                        <tr>
                            <td>شهر</td>
                            <td>{{ $user->userCity->name }}</td>
                        </tr>
                        <tr>
                            <td>آدرس</td>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <td>وضعیت تاهل</td>
                            <td>{{ $user->marriage == 'single' ? 'مجرد' : 'متاهل' }}</td>
                        </tr>
                        <tr>
                            <td>تاریخ تولد</td>
                            <td>{{ $user->birth_date }}</td>
                        </tr>
                        <td>
                            <button><a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn ripple btn-warning">ویرایش</a></button>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn ripple btn-danger" type="submit">حذف</button>

                            </form>
                        </td>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
        <a href="/">بازگشت به صفحه اصلی</a>
    </div>
</body>
</html>
