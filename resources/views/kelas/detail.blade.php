@extends('template.layout')
@section('content')
    <main>
        <!-- category area start -->
        <section class="contact__area grey-bg-2 pt-120 pb-90 p-relative fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6  col-lg-6 col-md-6">
                        <div class="contact__item text-center mb-30 transition-3 white-bg">
                            <div class="contact__icon d-flex justify-content-center align-items-end">
                                <span>
                                    <svg width="41" height="38" viewBox="0 0 41 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.3333 27.9821V4.84788C39.3333 2.54788 37.455 0.84205 35.1742 1.03372H35.0592C31.0342 1.37872 24.92 3.42955 21.5083 5.57622L21.1825 5.78705C20.6267 6.13205 19.7067 6.13205 19.1508 5.78705L18.6717 5.49955C15.26 3.37205 9.165 1.34038 5.14 1.01455C2.85917 0.822883 1 2.54788 1 4.82872V27.9821C1 29.8221 2.495 31.547 4.335 31.777L4.89083 31.8537C9.05 32.4096 15.4708 34.5179 19.1508 36.5304L19.2275 36.5687C19.745 36.8562 20.5692 36.8562 21.0675 36.5687C24.7475 34.537 31.1875 32.4096 35.3658 31.8537L35.9983 31.777C37.8383 31.547 39.3333 29.8221 39.3333 27.9821Z"
                                            stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1666 6.41956V35.1696" stroke="#3D6CE7" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0209 12.1696H7.70837" stroke="#3D6CE7" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.4584 17.9196H7.70837" stroke="#3D6CE7" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="contact__content">
                                <a href="{{ url('/tugas/' . $kelas->id) }}" class="btn btn-outline-primary">
                                    <h3 class="contact__title">Lihat Tugas</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6  col-lg-6 col-md-6">
                        <div class="contact__item text-center mb-30 transition-3 white-bg">
                            <div class="contact__icon d-flex justify-content-center align-items-end">
                                <span>
                                    <svg width="41" height="38" viewBox="0 0 41 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M39.3333 27.9821V4.84788C39.3333 2.54788 37.455 0.84205 35.1742 1.03372H35.0592C31.0342 1.37872 24.92 3.42955 21.5083 5.57622L21.1825 5.78705C20.6267 6.13205 19.7067 6.13205 19.1508 5.78705L18.6717 5.49955C15.26 3.37205 9.165 1.34038 5.14 1.01455C2.85917 0.822883 1 2.54788 1 4.82872V27.9821C1 29.8221 2.495 31.547 4.335 31.777L4.89083 31.8537C9.05 32.4096 15.4708 34.5179 19.1508 36.5304L19.2275 36.5687C19.745 36.8562 20.5692 36.8562 21.0675 36.5687C24.7475 34.537 31.1875 32.4096 35.3658 31.8537L35.9983 31.777C37.8383 31.547 39.3333 29.8221 39.3333 27.9821Z"
                                            stroke="#031220" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M20.1666 6.41956V35.1696" stroke="#3D6CE7" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0209 12.1696H7.70837" stroke="#3D6CE7" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.4584 17.9196H7.70837" stroke="#3D6CE7" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="contact__content">
                                <a href="{{ url('/materi/' . $kelas->id) }}" class="btn btn-outline-primary">
                                    <h3 class="contact__title">Lihat Materi</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
