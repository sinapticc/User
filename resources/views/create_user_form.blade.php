<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>فرم ایجاد کاربر جدید</title>
    <link rel="stylesheet" href="css/js-persian-cal.css">
    <script type="text/javascript" src="js/js-persian-cal.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/city.js') }}"></script>
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

<h2>فرم ایجاد کاربر جدید</h2>

<div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card custom-card">
            <div class="card-body">
                <form class="base-form" action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="" for="name">نام:</label>
                        <input class="form-control" type="text" name="name" required/>
                        @error('name')
                        <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="" for="family_name">نام خانوادگی:</label>
                        <input class="form-control" type="text" name="family_name" required/>
                        @error('family_name')
                        <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="" for="father_name">نام پدر:</label>
                        <input class="form-control" type="text" name="father_name" required/>
                        @error('father_name')
                        <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="" for="nat_id">شماره شناسنامه:</label>
                        <input class="form-control" type="number" name="nat_id" required/>
                        @error('nat_id')
                        <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="" for="birth_place">محل صدور:</label>
                        <input class="form-control" type="text" name="birth_place" required/>
                        @error('birth_place')
                        <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <br/>
                    <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                        <label class="" for="province">استان:</label>
                        <select class="form-control select select2" name="province" onChange="updateCityOptions(this.value);">
                            <option value="0">لطفا استان را انتخاب نمایید</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br/>
                    <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                        <label class="" for="city">شهر:</label>
                        <select class="form-control select select2" name="city" id="city">
                            <option value="0">لطفا شهر را انتخاب نمایید</option>
                        </select>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="" for="address">آدرس:</label>
                        <input class="form-control" type="text" name="address" required/>
                        @error('address')
                        <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <br/>
                    <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                        <label class="">وضعیت تاهل:</label>
                        <label class="rdiobox"><input type="radio" name="marriage" value="single" required><span>مجرد</span></label>
                        <label class="rdiobox"><input type="radio" name="marriage" value="married" required> <span>متاهل</span></label>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="" for="birth_date">تاریخ تولد:</label>
                        <input class="form-control" type="text" name="birth_date" id="pcal1" class="pdate" required/>
                    </div>
                    <br/>
                    <button type="submit" class="btn ripple btn-main-primary btn-block">ثبت کاربر</button>
                </form>
                <br>
                <a href="/">لیست کاربران</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var objCal1 = new AMIB.persianCalendar('pcal1');

</script>
</body>
</html>
