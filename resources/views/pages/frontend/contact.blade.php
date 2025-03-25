@extends('layouts.frontend')
@section('title', 'Contact Us')
@section('content')
<!-- Common Page Banner Start -->
<section class="commom_banner_sec" id="commom_banner_sec">
    <div class="common_banner_bg common_banner_contactuspage_bg">
        <div class="container">
            <div class="common_banner_content text-lg-start text-center">
                <h1 class="d-none">hidden</h1>
                <h2 class="d-none">hidden</h2>
                <h3 class="d-none">hidden</h3>
                <h4 class="d-none">hidden</h4>
                <h5 class="satoshi_fontfamily line_height_normal fw_500 color_white" data-aos="fade-down">
                    <a href="{{ route('home') }}" class="color_white">Home</a> / <span class="color_orange">Contact Us</span>
                </h5>
                <h2 class="color_white line_height_normal pt-20" data-aos="fade-down">CONTACT US</h2>
                <h3 class="d-none">hidden</h3>
                <h4 class="d-none">hidden</h4>
            </div>
        </div>
    </div>
</section>
<!-- Common Page Banner end -->

<!-- Contact-Us Page Start -->
<section class="our_contactus_page_sec" id="our_contactus_page">
    <div class="container">
        <div class="contactus_page_area sec_padding">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common_title_area contactus_page_title text-lg-start text-center">
                        <h5 class="satoshi_fontfamily fw_500 line_height_normal color_orange" data-aos="fade-down">About Gymort</h5>
                        <h3 class="pt-10 reveal custom_lightSpeedInLeft">FIND US HERE, MAKE REAL RESULTS.</h3>
                        <h4 class="d-none">hidden</h4>
                        <p class="satoshi_fontfamily fw_500 line_height_30 color_lightblack pt-20 pb-40" data-aos="fade-down">Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form.</p>
                    </div>
                    <div class="contactus_page_social_area">
                        <div class="row">
                            {{-- <div class="col-xl-4 col-sm-6">
                                <div class="footer_address p-0">
                                    <h5 class="d-none">hidd</h5>
                                    <h6 class="reveal custom_lightSpeedInLeft line_height_normal pb-15">WE ARE HERE</h6>
                                    <p class="satoshi_fontfamily line_height_30 fw_500 color_lightblack reveal custom_zoom_in">27 West 24th St New Your, NY 10010</p>
                                </div>
                            </div> --}}
                            <div class="col-xl-4 col-lg-5 d-xl-none d-lg-block d-none">
                                <div class="footer_quick_contact">
                                    <h6 class="reveal custom_lightSpeedInLeft line_height_normal pb-15">CALL US</h6>
                                    <div class="footer_contact">
                                        <a href="tel:+12345678899" class="satoshi_fontfamily line_height_30 fw_500 color_lightblack d-block triners_icons reveal custom_zoom_in">+1 234 567 8899</a>
                                        <a href="tel:+13456789900" class="satoshi_fontfamily line_height_30 fw_500 color_lightblack d-block triners_icons reveal custom_zoom_in">+1 345 678 9900</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-sm-6">
                                <div class="footer_gym_time">
                                    <h6 class="reveal custom_lightSpeedInLeft line_height_normal pb-15">WE ARE OPEN</h6>
                                    <p class="satoshi_fontfamily line_height_30 fw_500 color_lightblack reveal custom_zoom_in">Mon - Fri: 05:00 AM - 10:00 PM</p>
                                    <p class="satoshi_fontfamily line_height_30 fw_500 color_lightblack reveal custom_zoom_in">Sat - Sun: 05:00 AM - 01:00 PM</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 d-xl-block d-lg-none d-block">
                                <div class="footer_quick_contact">
                                    <h6 class="reveal custom_lightSpeedInLeft line_height_normal pb-15">CALL US</h6>
                                    <div class="footer_contact">
                                        <a href="tel:+12345678899" class="satoshi_fontfamily line_height_30 fw_500 color_lightblack d-block triners_icons reveal custom_zoom_in">+1 234 567 8899</a>
                                        <a href="tel:+13456789900" class="satoshi_fontfamily line_height_30 fw_500 color_lightblack d-block triners_icons reveal custom_zoom_in">+1 345 678 9900</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-sm-6">
                                <div class="single_project_social_icon_area">
                                    <a href="https://www.facebook.com/" class="single_project_social_icon triners_icons reveal custom_zoom_in" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                            <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g>
                                            <path d="M11.6654 11.2498H13.7487L14.582 7.9165H11.6654V6.24984C11.6654 5.39202 11.6654 4.58317 13.332 4.58317H14.582V1.78325C14.3106 1.74721 13.2845 1.6665 12.2011 1.6665C9.93903 1.6665 8.33203 3.04722 8.33203 5.58293V7.9165H5.83203V11.2498H8.33203V18.3332H11.6654V11.2498Z" fill="#000"></path>
                                            </g>
                                        </svg>                                                    
                                    </a>
                                    <a href="https://x.com/" class="single_project_social_icon triners_icons reveal custom_zoom_in" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                            <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g>
                                            <path d="M18.5104 4.71337C17.8743 4.99479 17.1996 5.17962 16.5088 5.26176C17.2366 4.8261 17.7812 4.14075 18.0411 3.33337C17.3573 3.73967 16.6088 4.02564 15.8282 4.17884C15.1693 3.47588 14.2483 3.07752 13.2848 3.07862C11.3605 3.07862 9.79975 4.63884 9.79975 6.56402C9.79975 6.83715 9.83109 7.10202 9.88967 7.35757C6.99206 7.2117 4.42506 5.82504 2.70565 3.71617C2.39608 4.24806 2.23338 4.85265 2.2342 5.46806C2.2342 6.67716 2.84967 7.74437 3.78458 8.36917C3.23115 8.35167 2.6899 8.2022 2.20599 7.93311C2.20545 7.94775 2.20545 7.96239 2.20545 7.97623C2.20545 9.66533 3.40683 11.0743 5.00166 11.3942C4.70234 11.4752 4.3936 11.5162 4.08352 11.5159C3.85831 11.5159 3.63976 11.4952 3.42733 11.4544C3.8711 12.8387 5.15739 13.8466 6.683 13.8742C5.44845 14.8432 3.92391 15.3688 2.35453 15.3666C2.07677 15.3668 1.79925 15.3504 1.52344 15.3176C3.1167 16.3418 4.97127 16.8854 6.86535 16.8834C13.2763 16.8834 16.7817 11.5729 16.7817 6.96759C16.7817 6.81692 16.778 6.66572 16.7713 6.51664C17.4536 6.02371 18.0425 5.41306 18.5104 4.71337Z" fill="#000"></path>
                                            </g>
                                        </svg>                                                    
                                    </a>
                                    <a href="https://www.instagram.com/" class="single_project_social_icon triners_icons reveal custom_zoom_in" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                            <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g>
                                            <path d="M10.0013 7.49984C8.62015 7.49984 7.5013 8.61909 7.5013 9.99984C7.5013 11.3809 8.62057 12.4998 10.0013 12.4998C11.3824 12.4998 12.5013 11.3806 12.5013 9.99984C12.5013 8.61875 11.3821 7.49984 10.0013 7.49984ZM10.0013 5.83317C12.3017 5.83317 14.168 7.69742 14.168 9.99984C14.168 12.3003 12.3037 14.1665 10.0013 14.1665C7.70091 14.1665 5.83464 12.3023 5.83464 9.99984C5.83464 7.69945 7.69889 5.83317 10.0013 5.83317ZM15.418 5.62413C15.418 6.19922 14.9507 6.66581 14.3763 6.66581C13.8012 6.66581 13.3347 6.1985 13.3347 5.62413C13.3347 5.04975 13.8019 4.58317 14.3763 4.58317C14.9499 4.58245 15.418 5.04975 15.418 5.62413ZM10.0013 3.33317C7.93924 3.33317 7.60314 3.33863 6.64404 3.38134C5.99061 3.41201 5.55259 3.4999 5.14562 3.6579C4.78395 3.79816 4.52306 3.96565 4.24509 4.24363C3.96604 4.52267 3.79885 4.78286 3.65915 5.1447C3.50079 5.5526 3.41293 5.98993 3.3828 6.64246C3.33968 7.5625 3.33464 7.88405 3.33464 9.99984C3.33464 12.0619 3.34009 12.398 3.38279 13.357C3.41349 14.0102 3.50149 14.4488 3.6591 14.8548C3.79974 15.217 3.96757 15.4785 4.2442 15.7552C4.52434 16.0349 4.78531 16.2027 5.14371 16.341C5.55564 16.5003 5.99339 16.5883 6.64392 16.6183C7.56397 16.6614 7.88551 16.6665 10.0013 16.6665C12.0634 16.6665 12.3995 16.661 13.3585 16.6183C14.0102 16.5878 14.4492 16.4995 14.8563 16.342C15.2175 16.2018 15.4798 16.0333 15.7567 15.7569C16.0368 15.4763 16.2042 15.216 16.3427 14.8568C16.5016 14.4463 16.5897 14.008 16.6198 13.3573C16.6629 12.4372 16.668 12.1156 16.668 9.99984C16.668 7.93777 16.6625 7.60168 16.6198 6.64265C16.5892 5.99072 16.5009 5.55108 16.3432 5.14415C16.2033 4.78349 16.0352 4.5218 15.7575 4.24363C15.478 3.96413 15.2185 3.79728 14.8564 3.65769C14.4488 3.49945 14.0108 3.41147 13.3587 3.38135C12.4387 3.33821 12.1171 3.33317 10.0013 3.33317ZM10.0013 1.6665C12.2652 1.6665 12.5478 1.67484 13.4367 1.7165C14.3235 1.75748 14.9284 1.89775 15.4597 2.104C16.0089 2.31581 16.4728 2.60192 16.936 3.06511C17.3985 3.52831 17.6847 3.99359 17.8972 4.5415C18.1027 5.07206 18.243 5.67761 18.2847 6.56442C18.3242 7.45331 18.3347 7.73595 18.3347 9.99984C18.3347 12.2638 18.3263 12.5463 18.2847 13.4353C18.2437 14.3221 18.1027 14.9269 17.8972 15.4582C17.6853 16.0075 17.3985 16.4713 16.936 16.9346C16.4728 17.3971 16.0068 17.6832 15.4597 17.8957C14.9284 18.1013 14.3235 18.2415 13.4367 18.2832C12.5478 18.3228 12.2652 18.3332 10.0013 18.3332C7.73741 18.3332 7.45477 18.3248 6.56589 18.2832C5.67908 18.2422 5.07491 18.1013 4.54297 17.8957C3.99435 17.6838 3.52977 17.3971 3.06658 16.9346C2.60339 16.4713 2.31797 16.0054 2.10547 15.4582C1.89922 14.9269 1.75964 14.3221 1.71797 13.4353C1.67839 12.5463 1.66797 12.2638 1.66797 9.99984C1.66797 7.73595 1.6763 7.45331 1.71797 6.56442C1.75894 5.67692 1.89922 5.07275 2.10547 4.5415C2.31727 3.9929 2.60339 3.52831 3.06658 3.06511C3.52977 2.60192 3.99505 2.3165 4.54297 2.104C5.07422 1.89775 5.67839 1.75817 6.56589 1.7165C7.45477 1.67692 7.73741 1.6665 10.0013 1.6665Z" fill="#000"></path>
                                            </g>
                                        </svg>                                                    
                                    </a>
                                    <a href="https://www.youtube.com" class="single_project_social_icon triners_icons reveal custom_zoom_in" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                            <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g>
                                            <path d="M10.5366 3C10.9817 3.00245 12.0952 3.01322 13.2784 3.06061L13.6979 3.0789C14.8892 3.1353 16.0794 3.23165 16.6698 3.39625C17.4572 3.61746 18.0761 4.26292 18.2852 5.0811C18.6183 6.38034 18.66 8.91617 18.6652 9.52983L18.6659 9.657V9.66592C18.6659 9.66592 18.6659 9.669 18.6659 9.67492L18.6652 9.80208C18.66 10.4158 18.6183 12.9516 18.2852 14.2508C18.0732 15.072 17.4543 15.7175 16.6698 15.9357C16.0794 16.1003 14.8892 16.1966 13.6979 16.253L13.2784 16.2713C12.0952 16.3187 10.9817 16.3294 10.5366 16.3319L10.3412 16.3326H10.3326C10.3326 16.3326 10.3297 16.3326 10.3239 16.3326L10.1287 16.3319C9.18675 16.3268 5.2481 16.2842 3.99542 15.9357C3.208 15.7144 2.5891 15.069 2.37989 14.2508C2.04683 12.9516 2.0052 10.4158 2 9.80208V9.52983C2.0052 8.91617 2.04683 6.38034 2.37989 5.0811C2.592 4.25988 3.2109 3.61443 3.99542 3.39625C5.2481 3.04769 9.18675 3.00518 10.1287 3H10.5366ZM8.66593 6.74928V12.5826L13.6659 9.66592L8.66593 6.74928Z" fill="#000"></path>
                                            </g>
                                        </svg>                                                    
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contactus_page_form_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="common_title_area contactus_page_form_title text-lg-start text-center">
                                    <h3 class="reveal custom_lightSpeedInLeft">CONTACT US</h3>
                                    <h4 class="d-none">hidden</h4>
                                    <p class="satoshi_fontfamily fw_500 line_height_30 color_lightblack pt-20 pb-40" data-aos="fade-down">Your email address will not be published. Required fields are marked*</p>
                                </div>
                            </div>
                        </div>
                        <div class="get_touch_form_area">
                            <form>
                                <div class="get_touch_form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="get_touch_box reveal custom_zoom_in active">
                                                <input type="text" class="form-control satoshi_fontfamily fw_500 line_height_24" placeholder="Your Name*" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="get_touch_box reveal custom_zoom_in active">
                                                <input type="email" class="form-control satoshi_fontfamily fw_500 line_height_24" placeholder="Your Email Address*" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="get_touch_box reveal custom_zoom_in active">
                                                <input type="text" class="form-control satoshi_fontfamily fw_500 line_height_24" placeholder="Subject*" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="get_touch_box reveal custom_zoom_in active">
                                                <textarea class="form-control satoshi_fontfamily fw_500 line_height_24" placeholder="Drop us a few lines here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="get_touch_box">
                                                <button type="submit" class="orange_btn black_btn border-0 p-0 bg_transparent reveal custom_fade_buttom active">
                                                    <span class="orenge_text whiteglow_btn" data-hover="Submit Now">
                                                        Submit Now
                                                    </span>
                                                    <span class="orenge_icon whiteglow_btn">
                                                        <img src="assets/images/svgs/common_button_arrow.svg" alt="common_button_arrow">
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="contact_us_map sec_padding_top">
                <div class="responsive-map" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.786728502161!2d72.77028821541435!3d21.160884085927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d91b765a3a3%3A0x632d46b1abea0c5e!2sKG%20FITNESS%20SURAT!5e0!3m2!1sen!2sin!4v1643439525386!5m2!1sen!2sin" allowfullscreen=""></iframe>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Contact-Us Page end -->

<!-- Gym-Marqueer-Text Start -->
<div class="gym_marqueer_text_sec reveal">
    <div class="gym_marqueer_text_slider_list bg_orange orangeglow">
        <div class="gym_marqueer_leftslide">
            <div class="marquee_content">
                <ul class="list-inline">
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">LIVE CLASSES</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">ON-DEMAND WORKOUTS</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">PERSONAL TRAINERS</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">OUTDOOR & ONLINE TRAINERS</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                </ul>
                <ul class="list-inline">
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">LIVE CLASSES</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">ON-DEMAND WORKOUTS</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">PERSONAL TRAINERS</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                    <li><a href="project-single-images.html" class="color_white custom_cursor_whiteglow">OUTDOOR & ONLINE TRAINERS</a></li>
                    <li><a href="javascript:void(0);" class="color_white custom_cursor_whiteglow">*</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Gym-Marqueer-Text End -->
@endsection