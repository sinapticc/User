<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>اطلاعات کامل کاربر</title>

    <link rel="stylesheet" href="/css/js-persian-cal.css">
    <script type="text/javascript" src="/js/js-persian-cal.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/city.js') }}"></script>

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


<body class="main-body leftmenu">
<div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card custom-card">
            <div class="card-body">
                <h2>ویرایش اطلاعات کاربر</h2>
                <form class="base-form" action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">نام:</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="family_name">نام خانوادگی:</label>
                        <input class="form-control" type="text" name="family_name" id="family_name" value="{{ $user->family_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="father_name">نام پدر:</label>
                        <input class="form-control" type="text" name="father_name" id="father_name" value="{{ $user->father_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nat_id">کد ملی:</label>
                        <input class="form-control" type="text" name="nat_id" id="nat_id" value="{{ $user->nat_id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="birth_place">محل تولد:</label>
                        <input class="form-control" type="text" name="birth_place" id="birth_place" value="{{ $user->birth_place }}" required>
                    </div>
                    <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                        <label class="" for="province">استان:</label>
                        <select class="form-control select select2" name="province" onChange="updateCityOptions(this.value);">
                            <option value="{{$user->province}}">{{ $userProvince }}</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <div class="item">
                        <label class="col-sm-4 mg-t-20 mg-sm-t-0" for="city">شهر:</label>
                        <select class="form-control select select2" name="city" id="city">
                            <option value="{{$user->city}}">{{ $userCity }}</option>
                        </select>
                    </div>
                    <br/>
                    <div class="item">
                        <label class="item-label">آدرس:</label>
                        <input class="form-control" type="text" name="address" value="{{ $user->address }}" required />
                    </div>
                    <br />
                    <div class="item">
                        <label class="item-label">وضعیت تاهل:</label>
                        <label class="rdiobox"><input type="radio" name="marriage" value="single" {{ $user->marriage == 'single' ? 'checked' : '' }} required> <span>مجرد</span></label>
                        <label class="rdiobox"><input type="radio" name="marriage" value="married" {{ $user->marriage == 'married' ? 'checked' : '' }} required> <span>متاهل</span></label>
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="birth_date">تاریخ تولد:</label>
                        <input class="form-control" type="text" name="birth_date" id="pcal1" class="pdate" value="{{ $user->birth_date }}" required>
                    </div>

                    <button type="submit" class="btn ripple btn-main-primary btn-block">ذخیره تغییرات</button>
                </form>

            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
        var objCal1 = new AMIB.persianCalendar( 'pcal1' );
    </script>
    </body>
</html>
