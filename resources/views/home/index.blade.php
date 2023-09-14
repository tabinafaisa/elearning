@extends('template.layout')
@section('content')
    <main>

        <!-- slider area start -->
        <section class="slider__area" id="beranda">
            <div class="slider__active swiper-container">
                <div class="swiper-wrapper">
                    <div class="slider__item swiper-slide p-relative slider__height d-flex align-items-center z-index-1">
                        <div class="slider__bg slider__overlay include-bg"
                            data-background="{{ asset('/') }}img/slider/slider-1.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-10">
                                    <div class="slider__content p-relative z-index-1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Educal University</span>
                                        <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">Institution of
                                            Higher Education</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">We believe everyone should have the
                                            opportunity to create progress through technolog.</p>
                                        {{-- <div class="slider__btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="course-v1.html" class="tp-btn" data-bs-toggle="modal"
                                                data-bs-target="#modal">Bergabung ke Kelas</a>
                                        </div>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item swiper-slide p-relative slider__height d-flex align-items-center z-index-1">
                        <div class="slider__bg slider__overlay include-bg"
                            data-background="{{ asset('/') }}img/slider/slider-2.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-10 col-sm-10">
                                    <div class="slider__content p-relative z-index-1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Educal University</span>
                                        <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">Together We'll
                                            Explore New Things</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">We believe everyone should have the
                                            opportunity <br> to create progress through technolog.</p>
                                        <div class="slider__btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="" class="tp-btn" data-bs-toggle="modal"
                                                data-bs-target="#modal">Bergabung ke Kelas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-paginations">
                    <button class="slider-button-next"><i class="fa-regular fa-arrow-right"></i></button>
                    <button class="slider-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
                </div>
            </div>
        </section>
        <!-- slider area end -->

        <section class="course__area pt-115 pb-90 grey-bg-3" id="kelas">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="course__tab-inner white-bg mb-50">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="course__tab-wrapper d-flex align-items-center">
                                        <div class="course__tab-btn">
                                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="grid-tab" data-bs-toggle="tab"
                                                        data-bs-target="#grid" type="button" role="tab"
                                                        aria-controls="grid" aria-selected="true">
                                                        <svg class="grid" viewBox="0 0 24 24">
                                                            <rect x="3" y="3" class="st0"
                                                                width="7" height="7" />
                                                            <rect x="14" y="3" class="st0"
                                                                width="7" height="7" />
                                                            <rect x="14" y="14" class="st0"
                                                                width="7" height="7" />
                                                            <rect x="3" y="14" class="st0"
                                                                width="7" height="7" />
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link list" id="list-tab" data-bs-toggle="tab"
                                                        data-bs-target="#list" type="button" role="tab"
                                                        aria-controls="list" aria-selected="false">
                                                        <svg class="list" viewBox="0 0 512 512">
                                                            <g id="Layer_2_1_">
                                                                <path class="st0"
                                                                    d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z" />
                                                                <circle class="st0" cx="64" cy="100"
                                                                    r="31" />
                                                                <path class="st0"
                                                                    d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z" />
                                                                <circle class="st0" cx="64" cy="256"
                                                                    r="31" />
                                                                <path class="st0"
                                                                    d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z" />
                                                                <circle class="st0" cx="64" cy="412"
                                                                    r="31" />
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course__view">
                                            <h4>Showing 1 - 6 of 84</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="course__sort d-flex justify-content-sm-end">
                                        <div class="course__sort-inner">
                                            @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger">{{ $error }}</div>
                                                @endforeach
                                            @endif
                                            @if (Session::has('notif'))
                                                <div class="alert alert-danger">{{ Session::get('notif')['msg'] }}</div>
                                            @endif
                                            <form action="{{ url('/kelas/siswa') }}" method="POST">
                                                @csrf
                                                <div class="footer__subscribe-input">
                                                    <input type="text" placeholder="Masukkan kode kelas"
                                                        name="code" required>
                                                    <button type="submit" class="tp-btn-subscribe">Gabung</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="course__tab-conent">
                                    <div class="tab-content" id="courseTabContent">
                                        <div class="tab-pane fade show active" id="grid" role="tabpanel"
                                            aria-labelledby="grid-tab">
                                            <div class="row">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                    <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                        <div class="course__thumb-2 w-img fix">
                                                            <a href="course-details.html">
                                                                <img src="assets/img/course/2/course-1.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div class="course__content-2">
                                                            <div
                                                                class="course__top-2 d-flex align-items-center justify-content-between">
                                                                <div class="course__tag-2">
                                                                    <a href="#">Design Thinking</a>
                                                                </div>
                                                                <div class="course__price-2">
                                                                    <span>$136</span>
                                                                </div>
                                                            </div>
                                                            <h3 class="course__title-2">
                                                                <a href="course-details.html">Mechanical Engineering and
                                                                    Electrical Engineering Explained.</a>
                                                            </h3>
                                                            <div
                                                                class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                                <div class="course__action">
                                                                    <ul>
                                                                        <li>
                                                                            <div
                                                                                class="course__action-item d-flex align-items-center">
                                                                                <div class="course__action-icon mr-5">
                                                                                    <span>
                                                                                        <svg width="10" height="12"
                                                                                            viewBox="0 0 10 12"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z"
                                                                                                stroke="#5F6160"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path
                                                                                                d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001"
                                                                                                stroke="#5F6160"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="course__action-content">
                                                                                    <span>4.2k</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="course__action-item d-flex align-items-center">
                                                                                <div class="course__action-icon mr-5">
                                                                                    <span>
                                                                                        <svg width="14" height="12"
                                                                                            viewBox="0 0 14 12"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z"
                                                                                                stroke="#5F6160"
                                                                                                stroke-width="1.3"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                            <path
                                                                                                d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z"
                                                                                                stroke="#5F6160"
                                                                                                stroke-width="1.3"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="course__action-content">
                                                                                    <span>44k</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="course__action-item d-flex align-items-center">
                                                                                <div class="course__action-icon mr-5">
                                                                                    <span>
                                                                                        <svg width="12" height="12"
                                                                                            viewBox="0 0 12 12"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z"
                                                                                                stroke="#5F6160"
                                                                                                stroke-width="1.3"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                        </svg>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="course__action-content">
                                                                                    <span>5.0</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="course__tutor-2">
                                                                    <a href="#">
                                                                        <img src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="list" role="tabpanel"
                                            aria-labelledby="list-tab">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    <div
                                                        class="course__item course__item-list white-bg mb-30 fix transition-3">
                                                        <div class="row gx-0">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                                <div class="course__thumb w-img p-relative fix">
                                                                    <a href="course-details.html">
                                                                        <img src="assets/img/course/list/course-1.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                                <div class="course__right p-relative">
                                                                    <div class="course__content p-relative">
                                                                        <div class="course__tag-2">
                                                                            <a href="#">Digital</a>
                                                                        </div>
                                                                        <h3 class="course__title">
                                                                            <a href="course-details.html">Non-Degree
                                                                                Seeking Online Design for Learning
                                                                                Environments.</a>
                                                                        </h3>
                                                                        <div class="course__summary">
                                                                            <p>Communia virtutes tutiorem declarat stoicorum
                                                                                sanabat oblivisci nostris tamquam
                                                                                iucunditatem</p>
                                                                        </div>
                                                                        <div
                                                                            class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                            <div class="course__tutor">
                                                                                <a href="#"><img
                                                                                        src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                        alt="">Brian Cumin</a>
                                                                            </div>
                                                                            <div class="course__lesson">
                                                                                <a href="#"><svg width="14"
                                                                                        height="16" viewBox="0 0 14 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 4.5H9.82353"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 6.94995H7.70589"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                                                                    12 Lessons
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                        <div class="course__price-2">
                                                                            <span>$74</span>
                                                                        </div>
                                                                        <div class="course__btn">
                                                                            <a href="course-details.html"
                                                                                class="link-btn-2">
                                                                                Know Details
                                                                                <i class="far fa-arrow-right"></i>
                                                                                <i class="far fa-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="course__item course__item-list white-bg mb-30 fix transition-3">
                                                        <div class="row gx-0">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                                <div class="course__thumb w-img p-relative fix">
                                                                    <a href="course-details.html">
                                                                        <img src="assets/img/course/list/course-2.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                                <div class="course__right p-relative">
                                                                    <div class="course__content p-relative">
                                                                        <div class="course__tag-2 pink-bg">
                                                                            <a href="#">Beginner</a>
                                                                        </div>
                                                                        <h3 class="course__title">
                                                                            <a href="course-details.html">Language
                                                                                Assessment in the Classroom Course.</a>
                                                                        </h3>
                                                                        <div class="course__summary">
                                                                            <p>Communia virtutes tutiorem declarat stoicorum
                                                                                sanabat oblivisci nostris tamquam
                                                                                iucunditatem.</p>
                                                                        </div>
                                                                        <div
                                                                            class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                            <div class="course__tutor">
                                                                                <a href="#"><img
                                                                                        src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                        alt="">Brian Cumin</a>
                                                                            </div>
                                                                            <div class="course__lesson">
                                                                                <a href="#"><svg width="14"
                                                                                        height="16" viewBox="0 0 14 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 4.5H9.82353"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 6.94995H7.70589"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                                                                    12 Lessons
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                        <div class="course__price-2">
                                                                            <span>$59</span>
                                                                        </div>
                                                                        <div class="course__btn">
                                                                            <a href="course-details.html"
                                                                                class="link-btn-2">
                                                                                Know Details
                                                                                <i class="far fa-arrow-right"></i>
                                                                                <i class="far fa-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="course__item course__item-list white-bg mb-30 fix transition-3">
                                                        <div class="row gx-0">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                                <div class="course__thumb w-img p-relative fix">
                                                                    <a href="course-details.html">
                                                                        <img src="assets/img/course/list/course-3.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                                <div class="course__right p-relative">
                                                                    <div class="course__content p-relative">
                                                                        <div class="course__tag-2 violet-bg">
                                                                            <a href="#">Design</a>
                                                                        </div>
                                                                        <h3 class="course__title">
                                                                            <a href="course-details.html">A framework for
                                                                                keeping up with an ever-evolving
                                                                                profession.</a>
                                                                        </h3>
                                                                        <div class="course__summary">
                                                                            <p>Communia virtutes tutiorem declarat stoicorum
                                                                                sanabat oblivisci nostris tamquam
                                                                                iucunditatem.</p>
                                                                        </div>
                                                                        <div
                                                                            class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                            <div class="course__tutor">
                                                                                <a href="#"><img
                                                                                        src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                        alt="">Brian Cumin</a>
                                                                            </div>
                                                                            <div class="course__lesson">
                                                                                <a href="#"><svg width="14"
                                                                                        height="16" viewBox="0 0 14 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 4.5H9.82353"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 6.94995H7.70589"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                                                                    12 Lessons
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                        <div class="course__price-2">
                                                                            <span>$85</span>
                                                                        </div>
                                                                        <div class="course__btn">
                                                                            <a href="course-details.html"
                                                                                class="link-btn-2">
                                                                                Know Details
                                                                                <i class="far fa-arrow-right"></i>
                                                                                <i class="far fa-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="course__item course__item-list white-bg mb-30 fix transition-3">
                                                        <div class="row gx-0">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                                <div class="course__thumb w-img p-relative fix">
                                                                    <a href="course-details.html">
                                                                        <img src="assets/img/course/list/course-4.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                                <div class="course__right p-relative">
                                                                    <div class="course__content p-relative">
                                                                        <div class="course__tag-2 yellow-bg">
                                                                            <a href="#">coding</a>
                                                                        </div>
                                                                        <h3 class="course__title">
                                                                            <a href="course-details.html">Expertise in a
                                                                                single subject or across a spectrum.</a>
                                                                        </h3>
                                                                        <div class="course__summary">
                                                                            <p>Communia virtutes tutiorem declarat stoicorum
                                                                                sanabat oblivisci nostris tamquam
                                                                                iucunditatem.</p>
                                                                        </div>
                                                                        <div
                                                                            class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                            <div class="course__tutor">
                                                                                <a href="#"><img
                                                                                        src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                        alt="">Brian Cumin</a>
                                                                            </div>
                                                                            <div class="course__lesson">
                                                                                <a href="#"><svg width="14"
                                                                                        height="16" viewBox="0 0 14 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 4.5H9.82353"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 6.94995H7.70589"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                                                                    12 Lessons
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                        <div class="course__price-2">
                                                                            <span>$140</span>
                                                                        </div>
                                                                        <div class="course__btn">
                                                                            <a href="course-details.html"
                                                                                class="link-btn-2">
                                                                                Know Details
                                                                                <i class="far fa-arrow-right"></i>
                                                                                <i class="far fa-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="course__item course__item-list white-bg mb-30 fix transition-3">
                                                        <div class="row gx-0">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                                <div class="course__thumb w-img p-relative fix">
                                                                    <a href="course-details.html">
                                                                        <img src="assets/img/course/list/course-5.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                                <div class="course__right p-relative">
                                                                    <div class="course__content p-relative">
                                                                        <div class="course__tag-2 blue-bg-2">
                                                                            <a href="#">UI/UX Design</a>
                                                                        </div>
                                                                        <h3 class="course__title">
                                                                            <a href="course-details.html">Differentiation
                                                                                for Learning Course - National Learning
                                                                                Centre</a>
                                                                        </h3>
                                                                        <div class="course__summary">
                                                                            <p>Communia virtutes tutiorem declarat stoicorum
                                                                                sanabat oblivisci nostris tamquam
                                                                                iucunditatem.</p>
                                                                        </div>
                                                                        <div
                                                                            class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                            <div class="course__tutor">
                                                                                <a href="#"><img
                                                                                        src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                        alt="">Brian Cumin</a>
                                                                            </div>
                                                                            <div class="course__lesson">
                                                                                <a href="#"><svg width="14"
                                                                                        height="16" viewBox="0 0 14 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 4.5H9.82353"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 6.94995H7.70589"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                                                                    12 Lessons
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                        <div class="course__price-2">
                                                                            <span>$196</span>
                                                                        </div>
                                                                        <div class="course__btn">
                                                                            <a href="course-details.html"
                                                                                class="link-btn-2">
                                                                                Know Details
                                                                                <i class="far fa-arrow-right"></i>
                                                                                <i class="far fa-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="course__item course__item-list white-bg mb-30 fix transition-3">
                                                        <div class="row gx-0">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                                <div class="course__thumb w-img p-relative fix">
                                                                    <a href="course-details.html">
                                                                        <img src="assets/img/course/list/course-6.jpg"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                                <div class="course__right p-relative">
                                                                    <div class="course__content p-relative">
                                                                        <div class="course__tag-2 purple-bg">
                                                                            <a href="#">Medical</a>
                                                                        </div>
                                                                        <h3 class="course__title">
                                                                            <a href="course-details.html">Teacher
                                                                                Development: Health Curriculum Course.</a>
                                                                        </h3>
                                                                        <div class="course__summary">
                                                                            <p>Communia virtutes tutiorem declarat stoicorum
                                                                                sanabat oblivisci nostris tamquam
                                                                                iucunditatem</p>
                                                                        </div>
                                                                        <div
                                                                            class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                            <div class="course__tutor">
                                                                                <a href="#"><img
                                                                                        src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                        alt="">Brian Cumin</a>
                                                                            </div>
                                                                            <div class="course__lesson">
                                                                                <a href="#"><svg width="14"
                                                                                        height="16" viewBox="0 0 14 16"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path
                                                                                            d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 4.5H9.82353"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                        <path d="M4.17647 6.94995H7.70589"
                                                                                            stroke="#49535B"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                                                                    12 Lessons
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                        <div class="course__price-2">
                                                                            <span>$225</span>
                                                                        </div>
                                                                        <div class="course__btn">
                                                                            <a href="course-details.html"
                                                                                class="link-btn-2">
                                                                                Know Details
                                                                                <i class="far fa-arrow-right"></i>
                                                                                <i class="far fa-arrow-right"></i>
                                                                            </a>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cta area end -->
        {{-- <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-dialog modal-dialog-centered"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Bergabung ke Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    @if (Session::has('notif'))
                        <div class="alert alert-danger">{{ Session::get('notif')['msg'] }}</div>
                    @endif
                    <div class="modal-body">
                        <input type="text" class="form-control" id="modal-kode" placeholder="Masukkan kode kelas" name="code">
                    </div>
                    <div class="modal-footer">
                        <form action="{{ url('/kelas/siswa') }}" method="POST">
                            @csrf
                        <button class="btn btn-primary" type="submit">Gabung</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </main>
@endsection
