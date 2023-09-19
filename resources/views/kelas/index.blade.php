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
                                        <span data-animation="fadeInUp" data-delay=".3s">Sekolah Menengah Kejuruan</span>
                                        <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">APLIKASI
                                            BELAJAR MENGAJAR</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">We believe everyone should have the
                                            opportunity to create progress through technolog.</p>
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
                                        <span data-animation="fadeInUp" data-delay=".3s">Sekolah Menengah Kejuruan</span>
                                        <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">Temukan
                                            Pengalaman Baru Yang Lebih Menarik</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">We believe everyone should have the
                                            opportunity <br> to create progress through technolog.</p>
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

        <!-- features area start -->
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
                                                <li class="nav-item" role="presentation">
                                                    <a href="{{ route('kelas.create') }}"><ion-icon name="add-outline"
                                                            size="large"></ion-icon></a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                                                        
                                                    </div>
                                                    <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                                                        <form action="{{ url('/search') }}" method="get">
                                                            <div class="header__search-input">
                                                                <input type="text" placeholder="Search...">
                                                                <button class="header__search-btn" name="search"><svg
                                                                        width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M8.11117 15.2222C12.0385 15.2222 15.2223 12.0385 15.2223 8.11111C15.2223 4.18375 12.0385 1 8.11117 1C4.18381 1 1.00006 4.18375 1.00006 8.11111C1.00006 12.0385 4.18381 15.2222 8.11117 15.2222Z"
                                                                            stroke="#031220" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M17 17L13.1334 13.1333" stroke="#031220"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>

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
                                                @foreach ($kelass as $value)
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                        <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                            <div class="course__thumb-2 w-img fix">
                                                                <a href="{{ url('/kelas/' . $value->id) }}">
                                                                    <img src="{{ Storage::url($value->image) }}"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="course__content-2">
                                                                <div
                                                                    class="course__top-2 d-flex align-items-center justify-content-between">
                                                                    <div class="course__tag-2 violet-bg">
                                                                        <a href="#">{{ $value->mapel }}</a>
                                                                    </div>
                                                                    <div class="course__price-2">
                                                                        <div class="course__action-icon mr-5">
                                                                            <span>
                                                                                <a
                                                                                    href="{{ route('kelas.edit', $value->id) }}">
                                                                                    <ion-icon
                                                                                        name="create-outline"></ion-icon>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="course__title-2">
                                                                    <a
                                                                        href="{{ url('/kelas/' . $value->id) }}">{{ $value->nama }}</a>
                                                                </h3>
                                                                <div
                                                                    class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                                    <h5>{{ $value->nama_guru }}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="list" role="tabpanel"
                                            aria-labelledby="list-tab">
                                            <div class="row">
                                                <div class="col-xxl-12">
                                                    @foreach ($kelass as $value)
                                                        <div
                                                            class="course__item course__item-list white-bg mb-30 fix transition-3">
                                                            <div class="row gx-0">
                                                                <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                                    <div class="course__thumb w-img p-relative fix">
                                                                        <a href="course-details.html">
                                                                            <img src="{{ Storage::url($value->image) }}"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-8 col-xl-8 col-lg-8">
                                                                    <div class="course__right p-relative">
                                                                        <div class="course__content p-relative">
                                                                            <div class="course__tag-2">
                                                                                <a href="#">{{ $value->mapel }}</a>
                                                                            </div>
                                                                            <div class="course__price-2">
                                                                                <div class="course__action-icon mr-5">
                                                                                    <span>
                                                                                        <a
                                                                                            href="{{ url('/kelas/' . $value->id . '/edit') }}">
                                                                                            <ion-icon
                                                                                                name="create-outline"></ion-icon>
                                                                                        </a>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="course__title">
                                                                                <a
                                                                                    href="course-details.html">{{ $value->nama }}</a>
                                                                            </h3>
                                                                            <div
                                                                                class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="course__content-bottom d-flex justify-content-between align-items-center">
                                                                            <div class="course__price-2">
                                                                                <h5>{{ $value->guru_id }}</h5>
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
                                                    @endforeach
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

    </main>
@endsection
