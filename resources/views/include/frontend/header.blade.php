<header>
    <div id="header_section">
        <div class="common_header_1" id="header_theme_1">
            <div class="header_sec" id="header_sec">
                <div class="header_theme_1">
                    <div class="container-fluid">
                        <div class="header_area">
                            <div class="row align-items-center">
                                <div class="col-xl-2 col-6">
                                    <div class="header_logo">
                                        <a href="{{ route('home') }}" class="custom_cursor_orangeglow">
                                            <img src="#" alt="header_logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-12 d-xl-block d-none">
                                    <div class="desktop_navbar">
                                        {{-- <nav>
                                            <ul class="dasktop_navlist satoshi_fontfamily">
                                                <li class="nav-items">
                                                    <a href="{{ route('home') }}" class="nav-links active custom_cursor_orangeglow">Home
                                                    </a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('shop') }}" class="nav-links custom_cursor_orangeglow">Programs
                                                    </a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('service.index') }}" class="nav-links custom_cursor_orangeglow">Services
                                                    </a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('blog.index') }}" class="nav-links custom_cursor_orangeglow">Blogs
                                                    </a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('contact') }}" class="nav-links custom_cursor_orangeglow">Contact</a>
                                                </li>
                                            </ul>
                                        </nav> --}}
                                        <nav>
                                            <ul class="dasktop_navlist satoshi_fontfamily">
                                                <li class="nav-items">
                                                    <a href="{{ route('home') }}" class="nav-links custom_cursor_orangeglow {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('shop') }}" class="nav-links custom_cursor_orangeglow {{ request()->routeIs('shop') ? 'active' : '' }}">Programs</a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('service.index') }}" class="nav-links custom_cursor_orangeglow {{ request()->routeIs('service.index') ? 'active' : '' }}">Services</a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('blog.index') }}" class="nav-links custom_cursor_orangeglow {{ request()->routeIs('blog.index') ? 'active' : '' }}">Blogs</a>
                                                </li>
                                                <li class="nav-items">
                                                    <a href="{{ route('contact') }}" class="nav-links custom_cursor_orangeglow {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>                                        
                                    </div>
                                </div>
                                <div class="col-xl-2 col-6">
                                    <div class="header_toggle_menu_area">
                                        <div class="header_searchbar orangeglow">
                                            <input type="checkbox" class="headersearch" name="search" id="headersearch">
                                            <div id="search" class="search-label">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <path d="M0 0H24V24H0V0Z" fill="white"/>
                                                    </mask>
                                                    <g>
                                                    <path d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M21 21L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </g>
                                                </svg>
                                                <div class="search_close">X</div>
                                            </div>
                                        </div>
                                        <div class="header_tooglemenu">
                                            <div class="orangeglow">
                                                <button class="btn sidebar_btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="20" cy="20" r="20" fill="white"/>
                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="8" y="8" width="24" height="24">
                                                        <path d="M8 8H32V32H8V8Z" fill="white"/>
                                                        </mask>
                                                        <g>
                                                            <path d="M12 20C12 20.2652 12.1054 20.5196 12.2929 20.7071C12.4804 20.8946 12.7348 21 13 21C13.2652 21 13.5196 20.8946 13.7071 20.7071C13.8946 20.5196 14 20.2652 14 20C14 19.7348 13.8946 19.4804 13.7071 19.2929C13.5196 19.1054 13.2652 19 13 19C12.7348 19 12.4804 19.1054 12.2929 19.2929C12.1054 19.4804 12 19.7348 12 20Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M19 20C19 20.2652 19.1054 20.5196 19.2929 20.7071C19.4804 20.8946 19.7348 21 20 21C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20C21 19.7348 20.8946 19.4804 20.7071 19.2929C20.5196 19.1054 20.2652 19 20 19C19.7348 19 19.4804 19.1054 19.2929 19.2929C19.1054 19.4804 19 19.7348 19 20Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M26 20C26 20.2652 26.1054 20.5196 26.2929 20.7071C26.4804 20.8946 26.7348 21 27 21C27.2652 21 27.5196 20.8946 27.7071 20.7071C27.8946 20.5196 28 20.2652 28 20C28 19.7348 27.8946 19.4804 27.7071 19.2929C27.5196 19.1054 27.2652 19 27 19C26.7348 19 26.4804 19.1054 26.2929 19.2929C26.1054 19.4804 26 19.7348 26 20Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                    </svg>                                                        
                                                </button>
                                            </div>

                                            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
                                                <div class="offcanvas-header custome_sidebar_head">
                                                    <div class="container-fluid">
                                                        <div class="custome_sidebar_upper">
                                                            <div class="toggle_menu_logo orangeglow">
                                                                <a href="{{ route('home') }}">
                                                                    <img src="#" alt="zohaibalam_logo">
                                                                </a>
                                                            </div>
                                                            <div class="orangeglow">
                                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                                                    <span class="sidebar_closed">X</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="offcanvas-body custome_sidebar">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-5 col-lg-6">
                                                                <div class="nav_get_in_touch">
                                                                    <div class="get_touch_text">
                                                                        <a href="{{ route('contact') }}" class="custom_cursor_whiteglow">
                                                                            <svg viewBox="0 0 1300 128">
                                                                                <symbol class="s-text">
                                                                                    <text text-anchor="middle" x="50%" y="50%" dy=".35em">LET’S DISCUSS</text>
                                                                                </symbol>
                                                                                <use class="text" xlink:href="#s-text"></use>
                                                                                <use class="text" xlink:href="#s-text"></use>
                                                                                <use class="text" xlink:href="#s-text"></use>
                                                                                <use class="text" xlink:href="#s-text"></use>
                                                                                <use class="text" xlink:href="#s-text"></use>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                    <div class="header_get_touch_contact">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-4 col-sm-4">
                                                                                <div class="header_single_get_touch_box">
                                                                                    <div class="header_get_touch_icon">
                                                                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                                                                                            <rect width="48" height="48" fill="white"></rect>
                                                                                            </mask>
                                                                                            <g>
                                                                                            <path d="M10 8H18L22 18L17 21C19.1419 25.3431 22.6569 28.8581 27 31L30 26L40 30V38C40 39.0609 39.5786 40.0783 38.8284 40.8284C38.0783 41.5786 37.0609 42 36 42C28.1985 41.5259 20.8403 38.213 15.3137 32.6863C9.78701 27.1597 6.4741 19.8015 6 12C6 10.9391 6.42143 9.92172 7.17157 9.17157C7.92172 8.42143 8.93913 8 10 8Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            <path d="M30 14C31.0609 14 32.0783 14.4214 32.8284 15.1716C33.5786 15.9217 34 16.9391 34 18" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            <path d="M30 6C33.1826 6 36.2348 7.26428 38.4853 9.51472C40.7357 11.7652 42 14.8174 42 18" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="header_get_touch_detail color_white">
                                                                                        <span class="color_lightgray">CALL US</span>
                                                                                        <a href="tel:+12345678899" class="line_height_normal satoshi_fontfamily color_white triners_icons">+1 234 567 8899</a>
                                                                                        <a href="tel:+13456789900" class="line_height_normal satoshi_fontfamily color_white triners_icons">+1 345 678 9900</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-4 col-sm-4">
                                                                                <div class="header_single_get_touch_box">
                                                                                    <div class="header_get_touch_icon">
                                                                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                                                                                            <rect width="48" height="48" fill="white"></rect>
                                                                                            </mask>
                                                                                            <g>
                                                                                            <path d="M22 38H10C8.93913 38 7.92172 37.5786 7.17157 36.8284C6.42143 36.0783 6 35.0609 6 34V14C6 12.9391 6.42143 11.9217 7.17157 11.1716C7.92172 10.4214 8.93913 10 10 10H38C39.0609 10 40.0783 10.4214 40.8284 11.1716C41.5786 11.9217 42 12.9391 42 14V26" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            <path d="M6 14L24 26L42 14" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            <path d="M30 38L34 42L42 34" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="header_get_touch_detail">
                                                                                        <span class="color_lightgray">Email Now</span>
                                                                                        <a href="mailto:hello@gymort.com" class="line_height_normal satoshi_fontfamily color_white triners_icons">hello@gymort.com</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- <div class="col-lg-12 col-md-4 col-sm-4">
                                                                                <div class="header_single_get_touch_box">
                                                                                    <div class="header_get_touch_icon">
                                                                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="48" height="48">
                                                                                            <rect width="48" height="48" fill="white"></rect>
                                                                                            </mask>
                                                                                            <g>
                                                                                            <path d="M18 22C18 23.5913 18.6321 25.1174 19.7574 26.2426C20.8826 27.3679 22.4087 28 24 28C25.5913 28 27.1174 27.3679 28.2426 26.2426C29.3679 25.1174 30 23.5913 30 22C30 20.4087 29.3679 18.8826 28.2426 17.7574C27.1174 16.6321 25.5913 16 24 16C22.4087 16 20.8826 16.6321 19.7574 17.7574C18.6321 18.8826 18 20.4087 18 22Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            <path d="M35.314 33.3144L26.828 41.8004C26.078 42.5497 25.0612 42.9705 24.001 42.9705C22.9408 42.9705 21.924 42.5497 21.174 41.8004L12.686 33.3144C10.4484 31.0767 8.92468 28.2258 8.30738 25.1221C7.69009 22.0184 8.00699 18.8014 9.21801 15.8779C10.429 12.9543 12.4798 10.4555 15.111 8.69741C17.7421 6.93934 20.8355 6.00098 24 6.00098C27.1645 6.00098 30.2579 6.93934 32.889 8.69741C35.5202 10.4555 37.571 12.9543 38.782 15.8779C39.993 18.8014 40.3099 22.0184 39.6926 25.1221C39.0753 28.2258 37.5516 31.0767 35.314 33.3144Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </div>
                                                                                    <div class="header_get_touch_detail">
                                                                                        <span class="color_lightgray">WE ARE HERE</span>
                                                                                        <a href="https://www.google.com/maps" class="line_height_normal satoshi_fontfamily color_white triners_icons">27 West 24th St New Your, NY 10010</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="header_get_touch_sociallink">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-3 col-sm-6">
                                                                                <a href="https://www.facebook.com/" target="_blank" class="triners_icons header_gettouch_icons color_white">
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                                                                        <rect width="20" height="20" fill="white"></rect>
                                                                                        </mask>
                                                                                        <g>
                                                                                        <path d="M11.6654 11.2498H13.7487L14.582 7.9165H11.6654V6.24984C11.6654 5.39202 11.6654 4.58317 13.332 4.58317H14.582V1.78325C14.3106 1.74721 13.2845 1.6665 12.2011 1.6665C9.93903 1.6665 8.33203 3.04722 8.33203 5.58293V7.9165H5.83203V11.2498H8.33203V18.3332H11.6654V11.2498Z" fill="#fff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                    Facebook
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-3 col-sm-6">
                                                                                    <a href="https://x.com/" target="_blank" class="triners_icons header_gettouch_icons color_white">
                                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                                                                            <rect width="20" height="20" fill="white"></rect>
                                                                                            </mask>
                                                                                            <g>
                                                                                            <path d="M18.987 4.63476C18.3508 4.91618 17.6762 5.10101 16.9854 5.18314C17.7132 4.74749 18.2577 4.06214 18.5177 3.25476C17.8338 3.66106 17.0853 3.94703 16.3047 4.10023C15.6458 3.39727 14.7249 2.99891 13.7614 3C11.8371 3 10.2763 4.56023 10.2763 6.48541C10.2763 6.75854 10.3077 7.0234 10.3662 7.27896C7.46863 7.13309 4.90163 5.74643 3.18222 3.63756C2.87264 4.16944 2.70994 4.77404 2.71077 5.38944C2.71077 6.59854 3.32623 7.66575 4.26114 8.29055C3.70771 8.27305 3.16647 8.12359 2.68255 7.85449C2.68202 7.86913 2.68202 7.88378 2.68202 7.89762C2.68202 9.58672 3.88339 10.9957 5.47823 11.3156C5.1789 11.3966 4.87017 11.4376 4.56008 11.4373C4.33488 11.4373 4.11633 11.4166 3.90389 11.3758C4.34766 12.7601 5.63395 13.768 7.15957 13.7956C5.92501 14.7646 4.40048 15.2902 2.83109 15.288C2.55333 15.2882 2.27581 15.2718 2 15.239C3.59327 16.2632 5.44783 16.8068 7.34192 16.8048C13.7529 16.8048 17.2582 11.4943 17.2582 6.88898C17.2582 6.7383 17.2546 6.5871 17.2479 6.43803C17.9302 5.94509 18.5191 5.33444 18.987 4.63476Z" fill="#fff"></path>
                                                                                            </g>
                                                                                        </svg>
                                                                                        Twitter
                                                                                    </a>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-3 col-sm-6">
                                                                                <a href="https://www.instagram.com/" target="_blank" class="triners_icons header_gettouch_icons color_white">
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                                                                        <rect width="20" height="20" fill="white"></rect>
                                                                                        </mask>
                                                                                        <g>
                                                                                        <path d="M11.1893 2C12.1271 2.00155 12.6024 2.00651 13.013 2.01873L13.1748 2.02403C13.3616 2.03067 13.5459 2.039 13.7682 2.04942C14.6549 2.09038 15.2599 2.23067 15.7911 2.43692C16.3404 2.64872 16.8043 2.93483 17.2674 3.39803C17.7299 3.86122 18.0161 4.3265 18.2286 4.87442C18.4341 5.40497 18.5744 6.01053 18.6161 6.89733C18.626 7.11955 18.634 7.30388 18.6406 7.49076L18.6459 7.65249C18.658 8.06312 18.6636 8.53843 18.6653 9.47627L18.666 10.0977C18.6661 10.1736 18.6661 10.2519 18.6661 10.3328L18.666 10.5679L18.6655 11.1893C18.6639 12.1271 18.659 12.6024 18.6468 13.013L18.6414 13.1748C18.6348 13.3616 18.6265 13.5459 18.6161 13.7682C18.5751 14.6549 18.4341 15.2599 18.2286 15.7911C18.0168 16.3404 17.7299 16.8043 17.2674 17.2674C16.8043 17.7299 16.3383 18.0161 15.7911 18.2286C15.2599 18.4341 14.6549 18.5744 13.7682 18.6161C13.5459 18.626 13.3616 18.634 13.1748 18.6406L13.013 18.6459C12.6024 18.658 12.1271 18.6636 11.1893 18.6653L10.5679 18.666C10.4919 18.6661 10.4136 18.6661 10.3328 18.6661L10.0977 18.666L9.47627 18.6655C8.53843 18.6639 8.06312 18.659 7.65249 18.6468L7.49076 18.6414C7.30388 18.6348 7.11955 18.6265 6.89733 18.6161C6.01053 18.5751 5.40636 18.4341 4.87442 18.2286C4.3258 18.0168 3.86122 17.7299 3.39803 17.2674C2.93483 16.8043 2.64942 16.3383 2.43692 15.7911C2.23067 15.2599 2.09108 14.6549 2.04942 13.7682C2.03952 13.5459 2.03144 13.3616 2.0249 13.1748L2.01966 13.013C2.00747 12.6024 2.00191 12.1271 2.00011 11.1893L2 9.47627C2.00155 8.53843 2.00651 8.06312 2.01873 7.65249L2.02403 7.49076C2.03067 7.30388 2.039 7.11955 2.04942 6.89733C2.09038 6.00983 2.23067 5.40567 2.43692 4.87442C2.64872 4.3258 2.93483 3.86122 3.39803 3.39803C3.86122 2.93483 4.3265 2.64942 4.87442 2.43692C5.40567 2.23067 6.00983 2.09108 6.89733 2.04942C7.11955 2.03952 7.30388 2.03144 7.49076 2.0249L7.65249 2.01966C8.06312 2.00747 8.53843 2.00191 9.47627 2.00011L11.1893 2ZM10.3328 6.16608C8.03033 6.16608 6.16608 8.03236 6.16608 10.3328C6.16608 12.6352 8.03236 14.4994 10.3328 14.4994C12.6352 14.4994 14.4994 12.6331 14.4994 10.3328C14.4994 8.03033 12.6331 6.16608 10.3328 6.16608ZM10.3328 7.83275C11.7135 7.83275 12.8328 8.9516 12.8328 10.3328C12.8328 11.7135 11.7139 12.8328 10.3328 12.8328C8.95202 12.8328 7.83275 11.7139 7.83275 10.3328C7.83275 8.95202 8.9516 7.83275 10.3328 7.83275ZM14.7078 4.91608C14.1333 4.91608 13.6661 5.38267 13.6661 5.95704C13.6661 6.53141 14.1327 6.99872 14.7078 6.99872C15.2821 6.99872 15.7494 6.53213 15.7494 5.95704C15.7494 5.38267 15.2814 4.91536 14.7078 4.91608Z" fill="#fff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                    Instagram
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-3 col-sm-6">
                                                                                <a href="https://www.youtube.com" target="_blank" class="triners_icons header_gettouch_icons color_white">
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                                                                        <rect width="20" height="20" fill="white"></rect>
                                                                                        </mask>
                                                                                        <g>
                                                                                        <path d="M9.20455 2.3335C9.64964 2.33595 10.7632 2.34671 11.9464 2.3941L12.3659 2.4124C13.5571 2.4688 14.7474 2.56515 15.3377 2.72975C16.1251 2.95095 16.7441 3.59641 16.9532 4.4146C17.2863 5.71384 17.328 8.24966 17.3331 8.86333L17.3339 8.9905V8.99941C17.3339 8.99941 17.3339 9.0025 17.3339 9.00841L17.3331 9.13558C17.328 9.74925 17.2863 12.2851 16.9532 13.5843C16.7411 14.4055 16.1222 15.051 15.3377 15.2692C14.7474 15.4337 13.5571 15.5301 12.3659 15.5865L11.9464 15.6047C10.7632 15.6522 9.64964 15.6629 9.20455 15.6654L9.00922 15.6661H9.00055C9.00055 15.6661 8.99763 15.6661 8.99189 15.6661L8.79672 15.6654C7.85472 15.6602 3.91607 15.6177 2.66339 15.2692C1.87597 15.0479 1.25707 14.4025 1.04786 13.5843C0.714802 12.2851 0.673169 9.74925 0.667969 9.13558V8.86333C0.673169 8.24966 0.714802 5.71384 1.04786 4.4146C1.25997 3.59338 1.87887 2.94793 2.66339 2.72975C3.91607 2.38119 7.85472 2.33868 8.79672 2.3335H9.20455ZM7.33389 6.08278V11.9161L12.3339 8.99941L7.33389 6.08278Z" fill="#fff"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                    Youtube
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-7 col-lg-6">
                                                                <div class="mobile_navbar">
                                                                    <ul class="mobile_navlist satoshi_fontfamily">
                                                                        <li class="nav-item-mobile position-relative">
                                                                            <a href="{{ route('home') }}" class="nav-link-mobile position-relative drop-down custom_cursor_orangeglow {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                                                                        </li>
                                                                        <li class="nav-item-mobile position-relative">
                                                                            <a href="{{ route('shop') }}" class="nav-link-mobile position-relative drop-down custom_cursor_orangeglow {{ request()->routeIs('shop') ? 'active' : '' }}">Programs</a>
                                                                        </li>
                                                                        <li class="nav-item-mobile position-relative">
                                                                            <a href="{{ route('service.index') }}" class="nav-link-mobile position-relative drop-down custom_cursor_orangeglow {{ request()->routeIs('service.index') ? 'active' : '' }}">Services</a>
                                                                        </li>
                                                                        <li class="nav-item-mobile position-relative">
                                                                            <a href="{{ route('blog.index') }}" class="nav-link-mobile position-relative drop-down custom_cursor_orangeglow {{ request()->routeIs('blog.index') ? 'active' : '' }}">Blogs</a>
                                                                        </li>
                                                                        <li class="nav-item-mobile position-relative">
                                                                            <a href="{{ route('contact') }}" class="nav-link-mobile position-relative custom_cursor_orangeglow {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="search-section">
                        <div class="search-box">
                            <div class="search-input">
                                <input type="search" placeholder="Search..." class="input-textarea">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                        <path d="M0 0H24V24H0V0Z" fill="white"/>
                                        </mask>
                                        <g>
                                        <path d="M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M21 21L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </header>