<!DOCTYPE html>
<html lang="fa">
<head>
    <title>لیست کاربران</title>
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link href="css/style/style.css" rel="stylesheet">
    <link href="css/skins.css" rel="stylesheet">
    <link href="css/dark-style.css" rel="stylesheet">
    <link href="css/colors/default.css" rel="stylesheet">

    <link id="theme" rel="stylesheet" type="text/css" media="all" href="css/colors/color.css">

    <link href="css/sidemenu/sidemenu.css" rel="stylesheet">

    <link href="plugins/select2/css/select2.min.css" rel="stylesheet">

    <link href="css/sidemenu/sidemenu.css" rel="stylesheet">

</head>


<body class="main-body leftmenu">

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <h1 class="main-content-title tx-24 mg-b-5">لیست کاربران</h1>
                <div class="table-responsive border">
                    <table class="table  text-nowrap text-md-nowrap table-striped mg-b-0">
                        <thead scope="row">
                        <tr>
                            <th>نام</th>
                            <th>کد ملی</th>
                        </tr>
                        </thead scope="row">
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
            </div>
        </div>
    </div>
</div>
    <br>
    <a href="/create" class="btn">افزودن کاربر</a>
</body>
</html>
