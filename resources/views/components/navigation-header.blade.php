<div class="header">

    <div class="header-left active">
        <a href="{{ route('panel') }}" class="logo logo-normal">
            <img src="{{ asset('css/img/logo.png') }}" alt>
        </a>
        <a href="{{ route('panel') }}" class="logo logo-white">
            <img src="{{ asset('css/img/logo3.png') }}" alt>
        </a>
        <a href="{{ route('panel') }}" class="logo-small">
            <img src="{{ asset('css/img/logo-small.png') }}" alt>
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item nav-searchinputs">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#" class="dropdown">
                    <div class="searchinputs dropdown-toggle" id="dropdownMenuClickable" data-bs-toggle="dropdown"
                        data-bs-auto-close="false">
                        <input type="text" placeholder="Search">
                        <div class="search-addon">
                            <span><i data-feather="x-circle" class="feather-14"></i></span>
                        </div>
                    </div>
                    <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
                        <div class="search-info">
                            <h6><span><i data-feather="search" class="feather-16"></i></span>Recent Searches
                            </h6>
                            <ul class="search-tags">
                                <li><a href="javascript:void(0);">Products</a></li>
                                <li><a href="javascript:void(0);">Sales</a></li>
                                <li><a href="javascript:void(0);">Applications</a></li>
                            </ul>
                        </div>
                        <div class="search-info">
                            <h6><span><i data-feather="help-circle" class="feather-16"></i></span>Help</h6>
                            <p>How to Change Product Volume from 0 to 200 on Inventory management</p>
                            <p>Change Product Name</p>
                        </div>
                        {{-- <div class="search-info">
                            <h6><span><i data-feather="user" class="feather-16"></i></span>Customers</h6>
                            <ul class="customers">
                                <li>
                                    <a href="javascript:void(0);">Aron Varu<img
                                            src="{{ asset('css/img/profiles/avator1.jpg')}}"
                                            alt class="img-fluid"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Jonita<img
                                            src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-01.jpg"
                                            alt class="img-fluid"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Aaron<img
                                            src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/profiles/avatar-10.jpg"
                                            alt class="img-fluid"></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </form>
            </div>
        </li>


        {{-- <li class="nav-item dropdown has-arrow main-drop select-store-dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link select-store"
                data-bs-toggle="dropdown">
                <span class="user-info">
                    <span class="user-letter">
                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-01.png"
                            alt="Store Logo" class="img-fluid">
                    </span>
                    <span class="user-detail">
                        <span class="user-name">Select Store</span>
                    </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-01.png"
                        alt="Store Logo" class="img-fluid"> Grocery Alpha
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-02.png"
                        alt="Store Logo" class="img-fluid"> Grocery Apex
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-03.png"
                        alt="Store Logo" class="img-fluid"> Grocery Bevy
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/store/store-04.png"
                        alt="Store Logo" class="img-fluid"> Grocery Eden
                </a>
            </div>
        </li>


        <li class="nav-item dropdown has-arrow flag-nav nav-item-box">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                role="button">
                <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/us.png"
                    alt="Language" class="img-fluid">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item active">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/us.png"
                        alt height="16"> English
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/fr.png"
                        alt height="16"> French
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/es.png"
                        alt height="16"> Spanish
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/flags/de.png"
                        alt height="16"> German
                </a>
            </div>
        </li>

        <li class="nav-item nav-item-box">
            <a href="javascript:void(0);" id="btnFullscreen">
                <i data-feather="maximize"></i>
            </a>
        </li>
        <li class="nav-item nav-item-box">
            <a href="https://dreamspos.dreamstechnologies.com/html/template/email.html">
                <i data-feather="mail"></i>
                <span class="badge rounded-pill">1</span>
            </a>
        </li> --}}

        <li class="nav-item dropdown nav-item-box">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i data-feather="bell"></i><span class="badge rounded-pill">2</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="{{ asset('css/img/profiles/avator1.jpg') }}">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt
                                            src="#">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added
                                            new task <span class="noti-title">Patient appointment booking</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="{{ asset('css/img/profiles/avator1.jpg') }}">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt
                                            src="#">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                            changed the task name <span class="noti-title">Appointment booking
                                                with payment gateway</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="{{ asset('css/img/profiles/avator1.jpg') }}">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt
                                            src="#">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                            added <span class="noti-title">Domenic Houston</span> and <span
                                                class="noti-title">Claire Mapes</span> to project <span
                                                class="noti-title">Doctor available module</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="{{ asset('css/img/profiles/avator1.jpg') }}">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt
                                            src="#">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                            completed task <span class="noti-title">Patient and Doctor video
                                                conferencing</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="{{ asset('css/img/profiles/avator1.jpg') }}">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt
                                            src="#">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                            added new task <span class="noti-title">Private chat module</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="{{ asset('css/img/profiles/avator1.jpg') }}">View all
                        Notifications</a>
                </div>
            </div>
        </li>

        {{-- <li class="nav-item nav-item-box">
            <a href="#" id="theme_switcher">
                <i data-feather="sun"></i>
            </a>
        </li> --}}
        {{-- <li class="nav-item dropdown has-arrow main-drop">
           
            <form id="nav_color" method="post">
                <div class="theme-mode">                
                    <div class="row">
                        <div class="col-xl-4 ere">
                            <div class="layout-wrap">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="status-toggle d-flex align-items-center me-2">
                                        <input type="radio" name="nav_color"
                                            id="light_color" class="check nav-color"
                                            value="light"><label for="light_color"
                                            class="checktoggles"><span
                                                class="theme-name">Light</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 ere">
                            <div class="layout-wrap">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="status-toggle d-flex align-items-center me-2">
                                        <input type="radio" name="nav_color"
                                            id="grey_color" class="check nav-color"
                                            value="grey"><label for="grey_color"
                                            class="checktoggles"><span
                                                class="theme-name">Grey</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 ere">
                            <div class="layout-wrap">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="status-toggle d-flex align-items-center me-2">
                                        <input type="radio" name="nav_color"
                                            id="dark_color" class="check nav-color"
                                            value="dark"><label for="dark_color"
                                            class="checktoggles"><span
                                                class="theme-name">Dark</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </li> --}}
        {{-- <span class="theme-name" id="theme_name"></span> --}}
        {{-- <li class="nav-item dropdown has-arrow main-drop">
            <i class="fas fa-sun" id="theme_icon" style="font-size: 20px; cursor: pointer;"></i>
        </li> --}}
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-info">
                    <span class="user-letter">
                        <img src="{{ Auth::user()->imagen ? Storage::url('public/user/' . Auth::user()->imagen) : asset('css/img/profiles/avator1.jpg') }}"
                            alt class="img-fluid">
                    </span>
                    <span class="user-detail">
                        <span class="user-name">{{ Auth::user()->name }}</span>
                        <span class="user-role">{{ Auth::user()->getRoleNames()->first() }}</span>
                    </span>
                </span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img"><img src="{{ Auth::user()->imagen ? Storage::url('public/user/' . Auth::user()->imagen) : asset('css/img/profiles/avator1.jpg')}}" alt>
                            <span class="status online"></span>
                        </span>
                        <div class="profilesets">
                            <h6>{{ Auth::user()->name }}</h6>
                            <h5>{{ Auth::user()->getRoleNames()->first() }}</h5>
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="{{ route('profile.index') }}"> <i class="me-2"
                            data-feather="user"></i> Mi Perfil</a>
                    <a class="dropdown-item" href=""><i class="me-2"
                            data-feather="settings"></i>Configuraciones</a>
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="{{ route('logout') }}"><img
                            src="{{ asset('css/img/icons/log-out.svg') }}" class="me-2" alt="img">Salir</a>
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route('profile.index') }}">Mi Perfil</a>
            <a class="dropdown-item" href="">Configuraciones</a>
            <a class="dropdown-item" href="{{ route('logout') }}">Salir</a>
        </div>
    </div>

</div>
