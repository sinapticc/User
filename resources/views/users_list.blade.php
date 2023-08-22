<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title>لیست کاربران</title>

    <link href="/css/style/style.css" rel="stylesheet">
    <link href="/css/skins.css" rel="stylesheet">
    <link href="/css/dark-style.css" rel="stylesheet">
    <link href="/css/colors/default.css" rel="stylesheet">


    <!-- Favicon -->
    <link rel="icon" href="/img/brand/favicon.ico" type="image/x-icon"/>


    <!-- Bootstrap css-->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Icons css-->
    <link href="/plugins/web-fonts/icons.css" rel="stylesheet"/>
    <link href="/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/web-fonts/plugin.css" rel="stylesheet"/>

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
                    <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span class="sidemenu-label">کاربر</span><i class="angle fe fe-chevron-left"></i></a>
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
    <!-- End Sidemenu -->		<!-- Main Header-->
    <div class="main-header side-header sticky">
        <div class="container-fluid">
            <div class="main-header-right">
                <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="/"><img src="/img/brand/logo.png" class="mobile-logo" alt="لوگو"></a>
                    <a href="/"><img src="/img/brand/logo-light.png" class="mobile-logo-dark" alt="لوگو"></a>
                </div>
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
                    <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                    <button class="btn search-btn"><i class="fe fe-search"></i></button>
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
                                <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                                <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown main-header-notification flag-dropdown">
                    <a class="nav-link icon country-Flag">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"></path></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"></path><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"></path></g></svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item d-flex ">
                            <span class="avatar  ml-3 align-self-center bg-transparent"><img src="/img/flags/french_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">فرانسوی</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar  ml-3 align-self-center bg-transparent"><img src="/img/flags/germany_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">آلمان</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar ml-3 align-self-center bg-transparent"><img src="/img/flags/italy_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">ایتالیا</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar ml-3 align-self-center bg-transparent"><img src="/img/flags/russia_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">روسیه</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar  ml-3 align-self-center bg-transparent"><img src="/img/flags/spain_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">اسپانیا</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link" href="#">
                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                    </a>
                </div>
                <div class="dropdown main-header-notification">
                    <a class="nav-link icon" href="#">
                        <i class="fe fe-bell header-icons"></i>
                        <span class="badge badge-danger nav-link-badge">4</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <p class="main-notification-text">شما 1 اعلان خوانده نشده <span class="badge badge-pill badge-primary mr-3">مشاهده همه</span></p>
                        </div>
                        <div class="main-notification-list">
                            <div class="media new">
                                <div class="main-img-user online"><img alt="آواتار" src="/img/users/5.jpg"></div>
                                <div class="media-body">
                                    <p>به <strong>اولیویا جیمز</strong> برای شروع الگوی جدید تبریک می گوییم</p><span>15 بهمن  12:32 بعد از ظهر</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user"><img alt="آواتار" src="/img/users/2.jpg"></div>
                                <div class="media-body">
                                    <p><strong></strong>پیام جدید <strong>جوشوا گری</strong> دریافت شد</p><span>13 بهمن   02:56 صبح</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user online"><img alt="آواتار" src="/img/users/3.jpg"></div>
                                <div class="media-body">
                                    <p><strong>الیزابت لوئیس</strong> برنامه جدیدی را به فروش مجدد اضافه کرد</p><span>12 بهمن  10:40 بعد از ظهر</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">مشاهده همه اعلان ها</a>
                        </div>
                    </div>
                </div>
                <div class="main-header-notification">
                    <a class="nav-link icon" href="chat.html">
                        <i class="fe fe-message-square header-icons"></i>
                        <span class="badge badge-success nav-link-badge">6</span>
                    </a>
                </div>
                <div class="dropdown main-profile-menu">
                    <a class="d-flex" href="#">
                        <span class="main-img-user"><img alt="آواتار" src="/img/users/1.jpg"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <h6 class="main-notification-title">سونیا تیلور</h6>
                            <p class="main-notification-text">طراح وب</p>
                        </div>
                        <a class="dropdown-item border-top" href="profile.html">
                            <i class="fe fe-user"></i> پروفایل من
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-edit"></i> ویرایش نمایه
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-settings"></i> تنظیمات حساب
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-settings"></i> پشتیبانی
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-compass"></i> فعالیت
                        </a>
                        <a class="dropdown-item" href="signin.html">
                            <i class="fe fe-power"></i> خروج از سیستم
                        </a>
                    </div>
                </div>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon" id="sidebar-icon" data-bs-toggle="sidebar-left" data-bs-target=".sidebar-left">
                        <i class="fe fe-align-left header-icons"></i>
                    </a>
                </div>
                <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="تغییر پیمایش">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button><!-- Navresponsive closed -->
            </div>
        </div>
    </div>
    <!-- End Main Header-->		<!-- Mobile-header -->
    <div class="mobile-main-header">
        <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 mr-auto">
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
                                    <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                                    <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown main-header-notification flag-dropdown">
                        <a class="nav-link icon country-Flag">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"></path></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"></path><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"></path></g></svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item d-flex ">
                                <span class="avatar  ml-3 align-self-center bg-transparent"><img src="/img/flags/french_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">فرانسوی</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  ml-3 align-self-center bg-transparent"><img src="/img/flags/germany_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">آلمان</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar ml-3 align-self-center bg-transparent"><img src="/img/flags/italy_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">ایتالیا</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar ml-3 align-self-center bg-transparent"><img src="/img/flags/russia_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">روسیه</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  ml-3 align-self-center bg-transparent"><img src="/img/flags/spain_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">اسپانیا</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown ">
                        <a class="nav-link icon full-screen-link">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                    <div class="dropdown main-header-notification">
                        <a class="nav-link icon" href="#">
                            <i class="fe fe-bell header-icons"></i>
                            <span class="badge badge-danger nav-link-badge">4</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <p class="main-notification-text">شما 1 اعلان خوانده نشده <span class="badge badge-pill badge-primary mr-3">مشاهده همه</span></p>
                            </div>
                            <div class="main-notification-list">
                                <div class="media new">
                                    <div class="main-img-user online"><img alt="آواتار" src="/img/users/5.jpg"></div>
                                    <div class="media-body">
                                        <p>به <strong>اولیویا جیمز</strong> برای شروع الگوی جدید تبریک می گوییم</p><span>15 بهمن  12:32 بعد از ظهر</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user"><img alt="آواتار" src="/img/users/2.jpg"></div>
                                    <div class="media-body">
                                        <p><strong></strong>پیام جدید <strong>جوشوا گری</strong> دریافت شد</p><span>13 بهمن   02:56 صبح</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user online"><img alt="آواتار" src="/img/users/3.jpg"></div>
                                    <div class="media-body">
                                        <p><strong>الیزابت لوئیس</strong> برنامه جدیدی را به فروش مجدد اضافه کرد</p><span>12 بهمن  10:40 بعد از ظهر</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">مشاهده همه اعلان ها</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-notification mt-2">
                        <a class="nav-link icon" href="chat.html">
                            <i class="fe fe-message-square header-icons"></i>
                            <span class="badge badge-success nav-link-badge">6</span>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user"><img alt="آواتار" src="/img/users/1.jpg"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">سونیا تیلور</h6>
                                <p class="main-notification-text">طراح وب</p>
                            </div>
                            <a class="dropdown-item border-top" href="profile.html">
                                <i class="fe fe-user"></i> پروفایل من
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-edit"></i> ویرایش نمایه
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> تنظیمات حساب
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> پشتیبانی
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-compass"></i> فعالیت
                            </a>
                            <a class="dropdown-item" href="signin.html">
                                <i class="fe fe-power"></i> خروج از سیستم
                            </a>
                        </div>
                    </div>
                    <div class="dropdown  header-settings">
                        <a href="#" class="nav-link icon" id="sidebar-icon" data-bs-toggle="sidebar-left" data-bs-target=".sidebar-left">
                            <i class="fe fe-align-left header-icons"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile-header closed -->
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
                        <div class="justify-content-center">
                            <button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
                                وارد كردن<i class="fe fe-download mr-2"></i>
                            </button>
                            <button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
                                فیلتر<i class="fe fe-filter ml-2"></i>
                            </button>
                            <button type="button" class="btn btn-primary my-2 btn-icon-text">
                                گزارش را بارگیری کنید<i class="fe fe-download-cloud mr-2"></i>
                            </button>
                        </div>
                    </div>
                </div>



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
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->nat_id }}</td>
                                            <td>
                                                <div class="btn-icon-list">
                                                    <button class="btn ripple  btn-icon"><a href="{{ route('users.show', $user->id) }}"><i class="ti-eye"></i></a></button>

                                                    <button class="btn ripple  btn-icon"> <a href="{{ route('user.edit', ['user' => $user->id]) }}"><i class="ti-pencil-alt"></i></a></button>

                                                    <a href="{{ route('users.show', ['user' => $user->id, 'fromIndex' => true]) }}" class="btn ripple btn-icon"><i class="ti-trash"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
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
    function confirmDelete(user_id) {
        Swal.fire({
            title: 'آیا مطمئن هستید؟',
            text: "پس از حذف، اطلاعات کاربر قابل بازیابی نیست.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'بله، حذف شود',
            cancelButtonText: 'لغو'
        }).then((result) => {
            if (result.isConfirmed) {
                // ارسال فرم حذف با استفاده از جی‌کوئری یا اسکریپت جاوااسکریپت
                $("#deleteForm" + user_id).submit();
            }
        });
    }
</script>


<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-rtl.js"></script>

<!-- Perfect-scrollbar js -->
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js"></script>

<!-- Sidemenu js -->
<script src="plugins/sidemenu/sidemenu-rtl.js"></script>

<!-- Sidebar js -->
<script src="plugins/sidebar/sidebar-rtl.js"></script>

<!-- Select2 js-->
<script src="plugins/select2/js/select2.min.js"></script>


<!-- Sticky js -->
<script src="js/sticky.js"></script>

<!-- Custom js -->
<script src="js/custom.js"></script>

</body>
</html>
