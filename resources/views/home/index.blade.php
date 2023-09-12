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
