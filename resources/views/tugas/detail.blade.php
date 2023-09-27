@extends('template.layout')
@section('content')
    <main>

        @foreach ($tugas as $value)
            <section class="blog__area pt-120 pb-120" style="background-color: aliceblue">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="postbox__wrapper postbox__details pr-20">
                                <div class="postbox__item transition-3 mb-70">
                                    <div class="postbox__thumb m-img">
                                        @php
                                            $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
                                            
                                            $explodeImage = explode('.', Storage::url($value->binary_data));
                                            $extension = end($explodeImage);
                                            
                                            if (in_array($extension, $imageExtensions)) {
                                                // Is image
                                                $check = 'gambar';
                                            } else {
                                                // Is not image
                                                $check = 'file';
                                            }
                                        @endphp
                                        @if ($check == 'gambar')
                                        <img src="{{ Storage::url($value->binary_data) }}" alt="{{ $value->nama_file }}">
                                        @else 
                                        <form action="{{ url('/download') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="path" value="{{ $value->binary_data }}">
                                        <button type="submit" class="btn btn-sm btn-warning">Download File Tugas</button>
                                        </form>
                                        @endif
                                    </div>
                                    <div class="postbox__content" style="background-color: white">
                                        <h3 class="postbox__title">{{ $value->judul }}</h3>
                                        <div class="postbox__text mb-40">
                                            <p>{{ $value->deskripsi }}</p>
                                        </div>
                                        {{-- <div class="postbox__quote grey-bg-2 mb-45 p-relative fix">
                                            <img class="quote" src="assets/img/blog/quote-1.png" alt="">
                                            <blockquote>
                                                <p>After I started learning design with Quillow, I realized that I had
                                                    Improved to very advanced levels.</p>
                                                <h4>Chris Collins</h4>
                                            </blockquote>
                                        </div> --}}
                                    </div>
                                </div>
                                @if (Auth::user()->hak_akses == 'siswa')
                                    <div
                                        class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-center">
                                        @if ($tugassiswa != '')
                                            <a href="javascript:void(0)" class="tp-btn-5 tp-btn-7">Tugas sudah dikerjakan
                                                pada {{ date('d/m/Y', strtotime($tugassiswa->created_at)) }}</a>
                                        @else
                                            <a href="{{ url('/tugas/siswa/create/' . $value->id) }}"
                                                class="tp-btn-5 tp-btn-7">Kerjakan Tugas</a>
                                        @endif
                                    </div>
                                @else
                                    <div class=" p-relative d-lg-flex align-items-center">
                                        <a href="{{ url('/detail/' . $value->id) }}"
                                            class="btn btn-info btn-lg">Diserahkan</a>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @endforeach
    </main>
@endsection
