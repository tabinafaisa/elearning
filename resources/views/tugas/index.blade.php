@extends('template.layout')
@section('content')
    <main>
        <!-- event area start -->
        <section class="event__area pt-115" style="background-color: aliceblue">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-2 text-center mb-60">
                            <h3 class="section__title-2">Daftar Tugas {{ $kelas->nama }}</h3>
                        </div>
                        @if (session('success'))
                            <div style="color: green">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div style="color: red">{{ session('error') }}</div>
                        @endif
                    </div>
                </div>
                @if (Auth::user()->hak_akses == 'guru')
                    <div class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between"
                        style="width: 27%">
                        <h5>Kode kelas : {{ $kelas->code }}</h5>
                        {{-- <h5>Kode kelas : {{ QrCode::size(50)->generate($kelas->code) }}</h5> --}}
                        {{-- <h5>Kode kelas : {!! DNS2D::getBarcodeHTML($kelas->code, 'QRCODE',5,5) !!}</h5> --}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-xxl-12">
                        @if (empty($tugas))
                        @foreach ($materi as $key => $value)
                                <div
                                    class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">

                                    <div class="event__left d-sm-flex align-items-center">
                                        <div class="event__content">

                                            <h3 class="event__title">
                                                Materi : {{ $value->judul }}
                                            </h3>


                                        </div>
                                    </div>

                                    <div class="event__right d-sm-flex align-items-center">
                                        <div class="event__more ml-30">
                                            <a href="{{ url('/materi/detail/' . $value->id) }}"
                                                class="btn btn-outline-info">Selengkapnya </a>
                                        </div>
                                        <div class="event__more ml-10">
                                            <form action="{{ url('delete/' . $kelas->id . '/' . $value->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                @if (Auth::user()->hak_akses == 'guru')
                                                    <button class="btn btn-outline-danger">Hapus</button>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
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
                                                {{ $value->judul }}
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
                                            <a href="{{ url('/tugas/detail/' . $value->id) }}"
                                                class="btn btn-outline-info">Selengkapnya </a>
                                        </div>
                                        <div class="event__more ml-10">
                                            <form action="{{ url('delete/' . $kelas->id . '/' . $value->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                @if (Auth::user()->hak_akses == 'guru')
                                                    <button class="btn btn-outline-danger">Hapus</button>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        @if (Auth::user()->hak_akses == 'guru')
                            <div class="nav nav-tabs">
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/kelas#kelas') }}" class="teacher__follow-btn">Kembali</a>

                                </div>
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/tugas/create/' . $kelas->id) }}" class="teacher__follow-btn">Tambah
                                        tugas </a>

                                </div>
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/materi/create/' . $kelas->id) }}" class="teacher__follow-btn">Tambah
                                        materi </a>

                                </div>
                            </div>
                        @else
                            <div class="nav nav-tabs">
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/tugas/detail_all/' . $kelas->id) }}"
                                        class="teacher__follow-btn">Lihat tugas</a>

                                </div>
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/kelas/siswa#kelas') }}" class="teacher__follow-btn">Kembali</a>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
