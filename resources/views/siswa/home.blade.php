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
                        @if (isset($kelas['code']))
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
                                                                <a href="{{ url('/tugas/' . $kelas->id) }}">
                                                                    <img src="{{ Storage::url($kelas->image) }}"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="course__content-2">
                                                                <div
                                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                                    <div class="course__tag-2">
                                                                        <a href="#">{{ $kelas->mapel }}</a>
                                                                    </div>
                                                                    <div class="course__price-2">
                                                                        <span>$136</span>
                                                                    </div>
                                                                </div>
                                                                <h3 class="course__title-2">
                                                                    <a href="{{ url('/tugas/' . $kelas->id) }}">{{ $kelas->nama }}</a>
                                                                </h3>
                                                                <div
                                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                                    
                                                                   <h5>{{ $datakelas->nama_guru }}</h5>
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
                                                                                <p>Communia virtutes tutiorem declarat
                                                                                    stoicorum
                                                                                    sanabat oblivisci nostris tamquam
                                                                                    iucunditatem</p>
                                                                            </div>
                                                                            <div
                                                                                class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                                <div class="course__tutor">
                                                                                    <a href="#"><img
                                                                                            src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                            alt="">Brian
                                                                                        Cumin</a>
                                                                                </div>
                                                                                <div class="course__lesson">
                                                                                    <a href="#"><svg width="14"
                                                                                            height="16"
                                                                                            viewBox="0 0 14 16"
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
                                                                                            <path
                                                                                                d="M4.17647 6.94995H7.70589"
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
                                                                                    Assessment in the Classroom
                                                                                    Course.</a>
                                                                            </h3>
                                                                            <div class="course__summary">
                                                                                <p>Communia virtutes tutiorem declarat
                                                                                    stoicorum
                                                                                    sanabat oblivisci nostris tamquam
                                                                                    iucunditatem.</p>
                                                                            </div>
                                                                            <div
                                                                                class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                                <div class="course__tutor">
                                                                                    <a href="#"><img
                                                                                            src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                            alt="">Brian
                                                                                        Cumin</a>
                                                                                </div>
                                                                                <div class="course__lesson">
                                                                                    <a href="#"><svg width="14"
                                                                                            height="16"
                                                                                            viewBox="0 0 14 16"
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
                                                                                            <path
                                                                                                d="M4.17647 6.94995H7.70589"
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
                                                                                <a href="course-details.html">A
                                                                                    framework for
                                                                                    keeping up with an ever-evolving
                                                                                    profession.</a>
                                                                            </h3>
                                                                            <div class="course__summary">
                                                                                <p>Communia virtutes tutiorem declarat
                                                                                    stoicorum
                                                                                    sanabat oblivisci nostris tamquam
                                                                                    iucunditatem.</p>
                                                                            </div>
                                                                            <div
                                                                                class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                                <div class="course__tutor">
                                                                                    <a href="#"><img
                                                                                            src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                            alt="">Brian
                                                                                        Cumin</a>
                                                                                </div>
                                                                                <div class="course__lesson">
                                                                                    <a href="#"><svg width="14"
                                                                                            height="16"
                                                                                            viewBox="0 0 14 16"
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
                                                                                            <path
                                                                                                d="M4.17647 6.94995H7.70589"
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
                                                                                <a href="course-details.html">Expertise
                                                                                    in a
                                                                                    single subject or across a
                                                                                    spectrum.</a>
                                                                            </h3>
                                                                            <div class="course__summary">
                                                                                <p>Communia virtutes tutiorem declarat
                                                                                    stoicorum
                                                                                    sanabat oblivisci nostris tamquam
                                                                                    iucunditatem.</p>
                                                                            </div>
                                                                            <div
                                                                                class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                                <div class="course__tutor">
                                                                                    <a href="#"><img
                                                                                            src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                            alt="">Brian
                                                                                        Cumin</a>
                                                                                </div>
                                                                                <div class="course__lesson">
                                                                                    <a href="#"><svg width="14"
                                                                                            height="16"
                                                                                            viewBox="0 0 14 16"
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
                                                                                            <path
                                                                                                d="M4.17647 6.94995H7.70589"
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
                                                                                    for Learning Course - National
                                                                                    Learning
                                                                                    Centre</a>
                                                                            </h3>
                                                                            <div class="course__summary">
                                                                                <p>Communia virtutes tutiorem declarat
                                                                                    stoicorum
                                                                                    sanabat oblivisci nostris tamquam
                                                                                    iucunditatem.</p>
                                                                            </div>
                                                                            <div
                                                                                class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                                <div class="course__tutor">
                                                                                    <a href="#"><img
                                                                                            src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                            alt="">Brian
                                                                                        Cumin</a>
                                                                                </div>
                                                                                <div class="course__lesson">
                                                                                    <a href="#"><svg width="14"
                                                                                            height="16"
                                                                                            viewBox="0 0 14 16"
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
                                                                                            <path
                                                                                                d="M4.17647 6.94995H7.70589"
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
                                                                                    Development: Health Curriculum
                                                                                    Course.</a>
                                                                            </h3>
                                                                            <div class="course__summary">
                                                                                <p>Communia virtutes tutiorem declarat
                                                                                    stoicorum
                                                                                    sanabat oblivisci nostris tamquam
                                                                                    iucunditatem</p>
                                                                            </div>
                                                                            <div
                                                                                class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                                <div class="course__tutor">
                                                                                    <a href="#"><img
                                                                                            src="assets/img/course/tutor/course-tutor-1.jpg"
                                                                                            alt="">Brian
                                                                                        Cumin</a>
                                                                                </div>
                                                                                <div class="course__lesson">
                                                                                    <a href="#"><svg width="14"
                                                                                            height="16"
                                                                                            viewBox="0 0 14 16"
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
                                                                                            <path
                                                                                                d="M4.17647 6.94995H7.70589"
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
                            {{-- @endforeach --}}
                        @endif
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
