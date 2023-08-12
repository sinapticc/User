<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>اطلاعات کامل کاربر</title>
    <link rel="stylesheet" href="/css/custom.css">

</head>
<body>
    <div class="container">
        <h2>ویرایش اطلاعات کاربر</h2>
        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">نام:</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="family_name">نام خانوادگی:</label>
                <input type="text" name="family_name" id="family_name" value="{{ $user->family_name }}" required>
            </div>
            <div class="form-group">
                <label for="father_name">نام پدر:</label>
                <input type="text" name="father_name" id="father_name" value="{{ $user->father_name }}" required>
            </div>
            <div class="form-group">
                <label for="nat_id">کد ملی:</label>
                <input type="text" name="nat_id" id="nat_id" value="{{ $user->nat_id }}" required>
            </div>
            <div class="form-group">
                <label for="birth_place">محل تولد:</label>
                <input type="text" name="birth_place" id="birth_place" value="{{ $user->birth_place }}" required>
            </div>
            <div class="form-group">
                <label for="day">روز تولد:</label>
                <input type="text" name="day" id="day" value="{{ $user->day }}" required>
            </div>
            <div class="form-group">
                <label for="month">ماه تولد:</label>
                <input type="text" name="month" id="month" value="{{ $user->month }}" required>
            </div>
            <div class="form-group">
                <label for="year">سال تولد:</label>
                <input type="text" name="year" id="year" value="{{ $user->year }}" required>
            </div>
            <button type="submit" class="edit-button">ذخیره تغییرات</button>
        </form>
    </div>
    </body>
</html>
