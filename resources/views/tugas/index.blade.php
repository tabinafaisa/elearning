@extends('template.layout')
@section('content')
    <main>
        <!-- event area start -->
        <section class="event__area pt-115">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-2 text-center mb-60">
                            <h3 class="section__title-2">Daftar Tugas {{ $kelas->nama }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        @foreach ($tugas as $key => $value)
                            <div
                                class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">

                                <div class="event__left d-sm-flex align-items-center">
                                    <div class="event__date">
                                        <h4>{{ date('d', strtotime($value->deadline)) }}</h4>
                                        <p>{{ date('F Y', strtotime($value->deadline)) }}</p>
                                    </div>
                                    <div class="event__content">

                                        <h3 class="event__title">
                                            <a href="event-details.html">{{ $value->judul }}</a>
                                        </h3>


                                    </div>
                                </div>

                                <div class="event__right d-sm-flex align-items-center">
                                    <div class="event__time">
                                        <span>
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z"
                                                    stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936"
                                                    stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            {{ date('H:i', strtotime($value->deadline)) }}
                                        </span>
                                    </div>
                                    <div class="event__more ml-30">
                                        <a href="{{ url('/tugas/detail/' . $value->id) }}" class="tp-btn-5 tp-btn-7">Selengkapnya </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if(Auth::user()->hak_akses == 'guru')
                        <div
                            class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-center">
                            <a href="{{ url('/tugas/create/' . $kelas->id) }}" class="tp-btn-5 tp-btn-7">Tambah tugas </a>

                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
