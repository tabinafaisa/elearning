@extends('template.layout')
@section('content')
    <main>
        <!-- event area start -->
        <section class="event__area pt-115" style="background-color: aliceblue">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-2 text-center mb-60">
                            <h3 class="section__title-2">Daftar Materi {{ $kelas->nama }}</h3>
                        </div>
                        @if (session('success'))
                            <div style="color: green">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div style="color: red">{{ session('error') }}</div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">

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
                                        @if (Auth::user()->hak_akses == 'guru')
                                            <form action="{{ url('/hapus/' . $kelas->id . '/' . $value->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-outline-danger">Hapus</button>

                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        @if (Auth::user()->hak_akses == 'guru')
                            <div class="nav nav-tabs">
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/kelas/detail/' . $kelas->id) }}"
                                        class="teacher__follow-btn">Kembali</a>

                                </div>
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/materi/create/' . $kelas->id) }}" class="teacher__follow-btn">Tambah
                                        materi </a>

                                </div>
                            </div>
                        @else
                            <div class="nav nav-tabs">
                                <div class="teacher__follow-mb-5">
                                    <a href="{{ url('/kelas/detail/' . $kelas->id) }}"
                                        class="teacher__follow-btn">Kembali</a>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
