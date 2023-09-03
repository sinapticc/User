<!DOCTYPE html>
<html dir="rtl">

<head>
    <title>اطلاعات کامل کاربر</title>
    <link href="/css/style/style.css" rel="stylesheet">
    <link href="/css/skins.css" rel="stylesheet">
    <link href="/css/dark-style.css" rel="stylesheet">
    <link href="/css/colors/default.css" rel="stylesheet">


    <!-- Favicon -->
    <link rel="icon" href="/img/brand/favicon.ico" type="image/x-icon" />


    <!-- Bootstrap css-->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="/css/style/style.css" rel="stylesheet">
    <link href="/css/skins.css" rel="stylesheet">
    <link href="/css/dark-style.css" rel="stylesheet">
    <link href="/css/colors/default.css" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/css/colors/color.css">

    <!-- Select2 css -->
    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet">


    <!-- Sidemenu css-->
    <link href="/css/sidemenu/sidemenu.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>

<body class="main-body leftmenu">

<div class="page">

    <!-- Sidemenu -->
    <div class="main-sidebar main-sidebar-sticky side-menu">
        <div class="sidemenu-logo">
            <a class="main-logo" href="/">
                <img src="/img/brand/logo-light.png" class="header-brand-img desktop-logo" alt="لوگو">
                <img src="/img/brand/icon-light.png" class="header-brand-img icon-logo" alt="لوگو">
                <img src="/img/brand/logo.png" class="header-brand-img desktop-logo theme-logo" alt="لوگو">
                <img src="/img/brand/icon.png" class="header-brand-img icon-logo theme-logo" alt="لوگو">
            </a>
        </div>
        <div class="main-sidebar-body">
            <ul class="nav">
                <li class="nav-header"><span class="nav-label">داشبورد</span></li>

                <li class="nav-item">
                    <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                            class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span
                            class="sidemenu-label">کاربر</span><i class="angle fe fe-chevron-left"></i></a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/">لیست کاربر ها</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="/create">افزودن</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- End Sidemenu --> <!-- Main Header-->
    <div class="main-header side-header sticky">
        <div class="container-fluid">
            <div class="main-header-right">
                <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="/"><img src="/img/brand/logo.png" class="mobile-logo" alt="لوگو"></a>
                    <a href="/"><img src="/img/brand/logo-light.png" class="mobile-logo-dark"
                                     alt="لوگو"></a>
                </div>
                <div class="input-group">


                </div>
            </div>
            <div class="main-header-right">
                <div class="dropdown header-search">
                    <a class="nav-link icon header-search">
                        <i class="fe fe-search header-icons"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="main-form-search p-2">
                            <div class="input-group">
                                <div class="input-group-btn search-panel">
                                    <select class="form-control select2-no-search">
                                        <option label="دسته بندی ها">
                                        </option>
                                        <option value="IT Projects">
                                            پروژه های IT
                                        </option>
                                        <option value="Business Case">
                                            مورد تجاری
                                        </option>
                                        <option value="Microsoft Project">
                                            پروژه مایکروسافت
                                        </option>
                                        <option value="Risk Management">
                                            مدیریت ریسک
                                        </option>
                                        <option value="Team Building">
                                            تیم سازی
                                        </option>
                                    </select>
                                </div>
                                <input type="search" class="form-control"
                                       placeholder="هر چیزی را جستجو کنید ...">
                                <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65">
                                        </line>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown main-header-notification">
                    <a class="nav-link icon" href="#">
                        <i class="fe fe-bell header-icons"></i>
                        <span class="badge badge-danger nav-link-badge">4</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <p class="main-notification-text">شما 1 اعلان خوانده نشده <span
                                    class="badge badge-pill badge-primary mr-3">مشاهده همه</span></p>
                        </div>
                        <div class="main-notification-list">
                            <div class="media new">
                                <div class="main-img-user online"><img alt="آواتار" src="/img/users/5.jpg">
                                </div>
                                <div class="media-body">
                                    <p>به <strong>اولیویا جیمز</strong> برای شروع الگوی جدید تبریک می گوییم</p>
                                    <span>15 بهمن 12:32 بعد از ظهر</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user"><img alt="آواتار" src="/img/users/2.jpg"></div>
                                <div class="media-body">
                                    <p><strong></strong>پیام جدید <strong>جوشوا گری</strong> دریافت شد</p><span>13
                                            بهمن 02:56 صبح</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user online"><img alt="آواتار" src="/img/users/3.jpg">
                                </div>
                                <div class="media-body">
                                    <p><strong>الیزابت لوئیس</strong> برنامه جدیدی را به فروش مجدد اضافه کرد</p>
                                    <span>12 بهمن 10:40 بعد از ظهر</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">مشاهده همه اعلان ها</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown main-profile-menu">
                    <a class="d-flex" href="#">
                        <span class="main-img-user"><img alt="آواتار" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvmnsZjpTikmNjgP3Ds5DAjbv3RNBCBNVM9x-PYPpukCiIzbF5cZ05m2kKimvX7_jPFxM&usqp=CAU"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <h6 class="main-notification-title">{{ Auth::user()->name }}</h6>

                        </div>

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="dropdown-item">
                            <i class="fe fe-power"></i> خروج از سیستم
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                    </div>
                </div>

                <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="تغییر پیمایش">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button><!-- Navresponsive closed -->
            </div>
        </div>
    </div>

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">کاربرها</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">کاربرها</a></li>
                            <li class="breadcrumb-item active" aria-current="page">لیست کاربرها</li>
                        </ol>
                    </div>
                    <div class="d-flex">

                    </div>
                </div>

                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <h2 class="main-content-title tx-24 mg-b-5">اطلاعات کامل کاربر</h2>
                                    <div class="table-responsive border">
                                        <table class="table  text-nowrap text-md-nowrap table-striped mg-b-0">

                                            <img src="{{Storage::url($user->image_path)}}" alt="{{ $user->name }}" class="profile-photo" />
                                            <br/>

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
                                                <td>استان</td>
                                                <td>
                                                    {{ $user->bProvince->name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>شهر</td>
                                                <td>{{ $user->bCity->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>آدرس</td>
                                                <td>{{ $user->address }}</td>
                                            </tr>
                                            <tr>
                                                @if ($user->addresses->count() > 0)
                                                    <td>آدرس</td>
                                            @foreach ($user->addresses as $address)

                                                    <td>{{ $address->address }}</td>
                                                </tr>
                                            @endforeach
                                            @endif
                                            <tr>
                                                <td>وضعیت تاهل</td>
                                                <td>{{ $user->marriage == 'single' ? 'مجرد' : 'متاهل' }}</td>
                                            </tr>
                                            <tr>
                                                <td>تاریخ تولد</td>
                                                <td>{{ $user->birth_date }}</td>
                                            </tr>
                                            <tr>
                                                <td>شماره همراه</td>
                                                <td>{{ $user->phone_num }}</td>
                                            </tr>
                                            <tr>
                                                @if ($user->phoneNumbers->count() > 0)
                                                    <td>شماره‌ همراه</td>
                                                    @foreach ($user->phoneNumbers as $phoneNumber)

                                                <td>{{ $phoneNumber->phone_number }}</td>

                                            @endforeach
                                            @endif
                                            </tr>
                                            <tr>
                                                <td>تلفن</td>
                                                <td>{{ $user->telephone }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <form action="{{ route('user.destroy', ['user' => $user->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        @if (request()->has('fromIndex'))
                                                            <button type="submit" name="delete"
                                                                class="btn btn-danger">حذف کاربر</button>
                                                        @endif
                                                </td>
                                                </form>
                                                </td>
                                                <td>
                                                    @if (request()->has('fromIndex'))
                                                        <a href="{{ route('users.index') }}"
                                                            class="btn btn-main-primary">بازگشت به صفحه اصلی</a>
                                                    @endif
                                                </td>
                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function confirmDelete(userId) {
            var response = prompt('آیا مطمئن هستید که می‌خواهید این کاربر را حذف کنید؟ (yes/no)');
            if (response !== null) {
                if (response.toLowerCase() === 'yes') {
                    return document.getElementById('deleteForm' + userId).submit();
                } else {
                    return alert('عملیات حذف لغو شد.');
                }
            }
        }
    </script>

    <script src="/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap-rtl.js"></script>

    <!-- Perfect-scrollbar js -->
    <script src="/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js"></script>

    <!-- Sidemenu js -->
    <script src="/plugins/sidemenu/sidemenu-rtl.js"></script>

    <!-- Sidebar js -->
    <script src="/plugins/sidebar/sidebar-rtl.js"></script>

    <!-- Select2 js-->
    <script src="/plugins/select2/js/select2.min.js"></script>


    <!-- Sticky js -->
    <script src="/js/sticky.js"></script>

    <!-- Custom js -->
    <script src="/js/custom.js"></script>

</body>
</html>
