<!DOCTYPE html>
<html>
<head>
    <title>فرم ایجاد کاربر جدید</title>
    <link rel="stylesheet" href="css\custom.css">
</head>
<body>
    <h2>فرم ایجاد کاربر جدید</h2>
<form action="/store" method="POST">
    @csrf
    <div class="item">
        <label class="item-label" for="name">نام:</label>
        <input type="text" name="name" required />
    </div>
    <br />
    <div class="item">
        <label class="item-label" for="family_name">نام خانوادگی:</label>
        <input type="text" name="family_name" required />
    </div>
    <br />
    <div class="item">
        <label class="item-label" for="father_name">نام پدر:</label>
        <input type="text" name="father_name" required />
    </div>
    <br />
    <div class="item">
        <label class="item-label" for="nat_id">شماره شناسنامه:</label>
        <input type="number" name="nat_id" required />
    </div>
    <br />
    <div class="item">
        <label class="item-label" for="birth_place">محل صدور:</label>
        <input type="text" name="birth_place" required />
    </div>
    <br />
    <div class="item">
        <label class="item-label" for="birth_date">تاریخ تولد:</label>
        <div class="birth_date_wrapper">
            <label class="birth_date_input" for="day">روز: </label>
            <input class="numinput" type="number" name="day" required />
            <label class="birth_date_input" for="month">ماه: </label>
            <input class="numinput" type="number" name="month" required />
            <label class="birth_date_input" for="year">سال: </label>
            <input class="numinput" type="number" name="year" required />
        </div>
    </div>
    <br />

    <button type="submit">ثبت کاربر</button>
</form>
<br>
<a href="/">لیست کاربران</a>
</body>
</html>
